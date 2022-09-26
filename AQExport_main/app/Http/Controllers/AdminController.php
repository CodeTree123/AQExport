<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_role;
use App\Models\user_info;
use App\Models\buyer_info;
use App\Models\product_info;
use App\Models\product_others_info;
use Session;
use File;
use LDAP\Result;
use Mail;
use App\Mail\UserMail;

class AdminController extends Controller
{

    public function buyer_list(){
        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }
        $contacts = user_info::where('role_id','=',"2")->get(); 
        $buyers = user_info::leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->where('user_infos.role_id','=',"5")->get(['user_infos.*','buyer_infos.buyer_contact_name','buyer_infos.buyer_country']);
        // dd($buyers);
        return view('user.buyer_list',compact('contacts','buyers','user'));
    }
    public function user_list(){
        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }
        $users = user_info::leftJoin('user_roles','user_infos.role_id','=','user_roles.id')->where('user_infos.emp_id','!=','null')->where('user_infos.id','!=','1')->get(['user_infos.*','user_roles.role']);
        // dd($users);
        $roles = user_role::find([1,2,3,4]);
        return view('user.user_list',compact('roles','users','user'));
    }

    public function add_buyer(Request $request){
        // dd($request->all());
        // $contact_name = user_info::where('id','=',$request->contact_id)->first()->name;
        // dd($contact_name);

        $user_info = new user_info();
        $user_info->name = $request->buyer_name;
        $user_info->email = $request->buyer_email;
        $user_info->password = $request->buyer_password;
        $user_info->role_id = $request->buyer_role;
        $user_info->save();

        $buyer_id = user_info::where('email','=',$request->buyer_email)->first()->id;
        $buyer_info = new buyer_info();
        $buyer_info->user_id = $buyer_id;
        // $buyer_info->contact_id = $request->contact_id;
        $buyer_info->buyer_contact_name = $request->contact_name;
        $buyer_info->buyer_country = $request->buyer_country;
        $buyer_info->save();
        
        return back(); 
    }

    public function buyer_edit($id){
        $buyer_info = user_info::leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->where('user_infos.id','=',$id)->first();
        return response()->json([
            'status'=>200,
            'bi' => $buyer_info,
        ]);
    }

    public function update_buyer(Request $request){
        // dd($request->all());

        $buyer_id = $request->buyer_id;
        // dd($buyer_id);
        // $contact_name = user_info::where('id','=',$request->contact_person_edit)->first()->name;
        // dd($contact_name);


        $user_info = user_info::find($buyer_id);
        $user_info->name = $request->buyer_name_edit;
        $user_info->email = $request->buyer_email_edit;
        $user_info->role_id = $request->buyer_role;
        $user_info->update();

        $buyer_info = buyer_info::where('user_id','=',$buyer_id)->first();
        // $buyer_info->contact_id = $request->contact_person_edit;
        // $buyer_info->buyer_contact_name = $contact_name;
        $buyer_info->buyer_contact_name = $request->contact_name_edit;
        $buyer_info->buyer_country = $request->buyer_country_edit;
        $buyer_info->update();

        return back();
    }

    public function delete_buyer_list(Request $request){
        $del_buyer_id = $request->deletingId;

        $del_buyer_info = user_info::find($del_buyer_id);
        $del_buyer_info->delete();
        $del_buyer = buyer_info::where('user_id','=',$del_buyer_id);
        $del_buyer->delete();

        return back();
    }

    public function add_employee(Request $request){

        $user_info = new user_info();
        $user_info->name = $request->emp_name;
        $user_info->email = $request->emp_email;
        $user_info->password = $request->emp_password;
        $user_info->role_id = $request->role;
        $user_info->emp_id = $request->employee_id;
        $user_info->save();
        
        return back(); 
    }
    public function employee_edit($id){
        $employee_info = user_info::find($id);
        return response()->json([
            'status'=>200,
            'ei' => $employee_info,
        ]);
    }
    public function update_employee(Request $request){
        // dd($request->all());
        $user_id = $request->c_employee_id;

        $user_info = user_info::find($user_id);
        $user_info->name = $request->employee_name_edit;
        $user_info->email = $request->employee_email_edit;
        $user_info->role_id = $request->role_edit;
        $user_info->emp_id = $request->employee_id_edit;
        $user_info->update();
        
        return back(); 
    }

    public function delete_user_list(Request $request){
        $del_user_id = $request->deletingId;

        $del_user_info = user_info::find($del_user_id);
        $del_user_info->delete();
        return back();
    }

    public function products($u_id){
        $user =  user_info::where('id','=',$u_id)->first();
        $products = product_info::leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')->where('product_infos.status','=','1')->get(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
        return view('products',compact('products','user'));
    }

    public function product_details(){
        // dd($u_id);
        // $user =  user_info::where('id','=',$u_id)->first();
        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }
        $u_id = $user->id;
        // if($user->role_id == 2){
        //     $products = product_info::leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')->where('buyer_infos.contact_id','=',$u_id)->get(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
        // }else
        if($user->role_id == 5){
        $products = product_info::leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')->where('product_infos.buyer_id','=',$u_id)->get(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
        }else{
            $products = product_info::leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')->where('product_infos.status','=','0')->orderBy('name')->get(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
        }
        // dd($products);

        return view('product_info_for_user',compact('products','user'));

    }
    public function product_all_details($u_id,$id){
        $user =  user_info::where('id','=',$u_id)->first();
        $product_info = product_info::where('product_infos.id','=',$id)
                ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
                ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
                ->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')
            ->first(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
            // $remarks =[];
            if($product_info->remarks != null){
            $remark = $product_info->remarks;
            $remarks = explode("\r\n",$remark);
            if (($key = array_search("", $remarks)) !== false) {
                unset($remarks[$key]);
            }
            }else{
                $remarks[] = "No Remarks";
            }

            // dd($product_info,$remark,$remarks);

        return view('product_details',compact('product_info','user','remarks'));

    }
    public function product_add_form(){

        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }
        // dd($user);
        $mails = user_info::where('role_id','!=','5')->where('role_id','!=','1')->get();
        // dd($mail);
        $buyers = user_info::where('user_infos.role_id','=',"5")->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->get();
        // dd($buyers);

        return view('add_product_info',compact('buyers','user','mails'));

    }

    public function product_add(Request $request,$u_id){
        // dd($request->all());

        $mail_person = $request->mail_person;
        $mail_person = implode(',',$mail_person);
        // dd($mail_person);


        $check = product_info::all('id')->count();
        // $random=0;
        if($check == 0){
            $random = 1;
        }else{
            $random = $check + 1;
        }
        // dd($check,$random);
        $filename='';
        if($request->hasFile('image'))
        {
            
            $file= $request->file('image');
            if ($file->isValid()) {
                // dd("hello");
                $filename ="product".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('product',$filename);
            }
        }
        // dd($filename);


        $product_info = new product_info();

            $product_info->buyer_id = $request->buyer_id;
            $product_info->order_no = $request->order_no;
            $product_info->style = $request->style;
            $product_info->mail_p_ids = $mail_person;
            $product_info->product_name = $request->product_name;
            $product_info->image = $filename;
            $product_info->po_issue_date = $request->po_issue_date;
            $product_info->shipment_date = $request->shipment_date;
            $product_info->febric_details = $request->febric_details;
            $product_info->gsm = $request->gsm;
            $product_info->description = $request->description;
            $product_info->size = $request->size;
            $product_info->quantity = $request->quantity;
            $product_info->factory_name = $request->factory_name;
            $product_info->random = $random;

            $product_info->plannig_lab = $request->plannig_lab;
            $product_info->plannig_sample = $request->plannig_sample;

            // $product_info->color_way = $request->color_way;
            // $product_info->print_stricke_offs = $request->print_stricke_offs;
            // $product_info->comments_received = $request->comments_received;

            // $product_info->style_approval = $request->style_approval;
            // $product_info->style_comments = $request->style_comments;
            // $product_info->pp_sample = $request->pp_sample;
            // $product_info->pp_comments = $request->pp_comments;
            // $product_info->production_sample = $request->production_sample;
            // $product_info->production_comments = $request->production_comments;

        $product_info->save();

        $pro_id = product_info::where('random','=',$random)->first()->id;
            // dd($pro_id);   
        $product_other_info = new product_others_info();
            $product_other_info->proid = $pro_id;
            $product_other_info->accessories_planning = $request->plannig_accessories;
            $product_other_info->yarn_planning = $request->yarn_planning;
            $product_other_info->knitting_planning = $request->knitting_planning;
            $product_other_info->dyeing_planning = $request->dyeing_planning;
            $product_other_info->deliver_cutting_planning = $request->deliver_cutting_planning;

            $product_other_info->cutting_planning = $request->cutting_planning;
            $product_other_info->sewing_planning = $request->sewing_planning;
            $product_other_info->shipment_planning = $request->shipment_planning;

            // $product_other_info->main_label = $request->main_label;
            // $product_other_info->care_label = $request->care_label;
            // $product_other_info->size_label = $request->size_label;
            // $product_other_info->flag_label = $request->flag_label;
            // $product_other_info->patch_label = $request->patch_label;
            // $product_other_info->hang_tag = $request->hang_tag;
            // $product_other_info->hang_tag_string = $request->hang_tag_string;
            // $product_other_info->draw_string = $request->draw_string;
            // $product_other_info->eyelet = $request->eyelet;
            // $product_other_info->elastic = $request->elastic;
            // $product_other_info->zipper = $request->zipper;
            // $product_other_info->poly = $request->poly;
            // $product_other_info->gum_tape = $request->gum_tape;
            // $product_other_info->carton = $request->carton;
            // $product_other_info->others = $request->others;
            $product_other_info->save();

            return redirect()->route('product_details');

    }

    public function product_add_date_form($id){
        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }
        $product_info = product_info::where('product_infos.id','=',$id)
                ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
                ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
                ->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')
            ->first(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
            // dd($product_info);

        return view('add_product_dates',compact('product_info','user'));

    }

    public function product_add_date(Request $request,$u_id){
//  dd($request->all());
    // if(Session::has('loginId')){
        //     $user=user_info::where('id','=',Session::get('loginId'))->first();
        // }
    
        $p_id = $request->p_id;
        $product_info = product_info::find($p_id);
        $product_info->lab_received = $request->lab_received;
        $product_info->color_way = $request->color_way;
        $product_info->print_stricke_offs = $request->print_stricke_offs;
        $product_info->comments_received = $request->comments_received;

        $product_info->sample_received = $request->sample_received;
        $product_info->style_approval = $request->style_approval;
        $product_info->style_comments = $request->style_comments;
        $product_info->pp_sample = $request->pp_sample;
        $product_info->pp_comments = $request->pp_comments;
        $product_info->production_sample = $request->production_sample;
        $product_info->production_comments = $request->production_comments;
        $product_info->update();

        $product_other_info = product_others_info::find($p_id);

        $product_other_info->main_label = $request->main_label;
        $product_other_info->care_label = $request->care_label;
        $product_other_info->size_label = $request->size_label;
        $product_other_info->flag_label = $request->flag_label;
        $product_other_info->patch_label = $request->patch_label;
        $product_other_info->hang_tag = $request->hang_tag;
        $product_other_info->hang_tag_string = $request->hang_tag_string;
        $product_other_info->draw_string = $request->draw_string;
        $product_other_info->eyelet = $request->eyelet;
        $product_other_info->elastic = $request->elastic;
        $product_other_info->zipper = $request->zipper;
        $product_other_info->poly = $request->poly;
        $product_other_info->gum_tape = $request->gum_tape;
        $product_other_info->carton = $request->carton;
        $product_other_info->others = $request->others;

        $product_other_info->yarn_start = $request->yarn_start;
        $product_other_info->yarn_finish = $request->yarn_finish;

        $product_other_info->knitting_start = $request->knitting_start;
        $product_other_info->knitting_finish = $request->knitting_finish;

        $product_other_info->dyeing_start = $request->dyeing_start;
        $product_other_info->dyeing_finish = $request->dyeing_finish;
        $product_other_info->deliver_cutting_received = $request->deliver_cutting_received;
        $product_other_info->cutting_start = $request->cutting_start;
        $product_other_info->cutting_finish = $request->cutting_finish;
        $product_other_info->printing_start = $request->printing_start;
        $product_other_info->printing_finish = $request->printing_finish;

        $product_other_info->sewing_start = $request->sewing_start;
        $product_other_info->sewing_finish = $request->sewing_finish;
        $product_other_info->finishing_start = $request->finishing_start;
        $product_other_info->finishing_finish = $request->finishing_finish;

        $product_other_info->shipment_start = $request->shipment_start;
        $product_other_info->shipment_finish = $request->shipment_finish;
        $product_other_info->remarks = $request->remarks;
        $product_other_info->update();

        if($request->mail == 1){
            $product_info = product_info::where('product_infos.id','=',$p_id)
                    ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
                    ->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')
                    ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
                ->first(['product_infos.mail_p_ids','product_infos.style','product_infos.product_name','product_infos.quantity','user_infos.name','user_infos.email','product_others_infos.remarks','buyer_infos.buyer_contact_name']);
                // dd($product_info);
            $buyer_mail = $product_info->email;
            $remarks = $product_info->remarks;
            $remarks = explode("\r\n",$remarks);
            if (($key = array_search("", $remarks)) !== false) {
                unset($remarks[$key]);
            }
            $mail_person=$product_info->mail_p_ids;
            $style = $product_info->style;
            $product_name = $product_info->product_name;
            $quantity = $product_info->quantity;
            $buyer_contact_name = $product_info->buyer_contact_name;

            $sub = $style.'-'.$product_name.'-'.$quantity.'-'.$buyer_contact_name;
            $mail_person=explode(',',$mail_person);

    
            // dd($mail_person,$remarks);
            $mailData = [
                'title' => 'Remarkes List',
                'body' => $remarks,
            ];
     
            Mail::to($buyer_mail)->cc($mail_person)->send(new UserMail($mailData,$sub));
            
            // dd("Email is sent successfully.");
        }
        return redirect(route('product_all_details',[$u_id,$p_id]));


    }

    public function product_edit_form($id){
        if(Session::has('loginId')){
            $user=user_info::where('id','=',Session::get('loginId'))->first();
        }

        $product_info = product_info::where('product_infos.id','=',$id)
        ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
        ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
        ->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')
        ->first(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_others_infos.*']);
        // dd($product_info);

        return view('product_edit_form',compact('product_info','user'));
    }

    public function product_edit(Request $request,$u_id){
        //  dd($request->all());
        $p_id = $request->p_id;
        $product_info = product_info::find($p_id);

        $filename=$product_info->image;
        if($request->hasFile('image'))
        {
            $destination = 'uploads/product/'.$product_info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            
            $file= $request->file('image');
            if ($file->isValid()) {
                // dd("hello");
                $filename ="product".date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('product',$filename);
            }
        }

            // $product_info->buyer_id = $request->buyer_id;
            $product_info->order_no = $request->order_no;
            $product_info->style = $request->style;
            $product_info->product_name = $request->product_name;
            $product_info->image = $filename;

            $product_info->po_issue_date = $request->po_issue_date;
            $product_info->shipment_date = $request->shipment_date;
            $product_info->febric_details = $request->febric_details;
            $product_info->gsm = $request->gsm;
            $product_info->description = $request->description;
            $product_info->size = $request->size;
            $product_info->quantity = $request->quantity;
            $product_info->factory_name = $request->factory_name;

            $product_info->plannig_lab = $request->plannig_lab;
            $product_info->color_way = $request->color_way;
            $product_info->print_stricke_offs = $request->print_stricke_offs;
            $product_info->comments_received = $request->comments_received;

            $product_info->style_approval = $request->style_approval;
            $product_info->style_comments = $request->style_comments;
            $product_info->plannig_sample = $request->plannig_sample;
            $product_info->pp_sample = $request->pp_sample;
            $product_info->pp_comments = $request->pp_comments;
            $product_info->production_sample = $request->production_sample;
            $product_info->production_comments = $request->production_comments;

            $product_info->lab_received = $request->lab_received;
            $product_info->sample_received = $request->sample_received;
            $product_info->update();
        
        $product_other_info = product_others_info::find($p_id);

            $product_other_info->main_label = $request->main_label;
            $product_other_info->care_label = $request->care_label;
            $product_other_info->size_label = $request->size_label;
            $product_other_info->flag_label = $request->flag_label;
            $product_other_info->patch_label = $request->patch_label;
            $product_other_info->hang_tag = $request->hang_tag;
            $product_other_info->hang_tag_string = $request->hang_tag_string;
            $product_other_info->draw_string = $request->draw_string;
            $product_other_info->eyelet = $request->eyelet;
            $product_other_info->elastic = $request->elastic;
            $product_other_info->zipper = $request->zipper;
            $product_other_info->poly = $request->poly;
            $product_other_info->gum_tape = $request->gum_tape;
            $product_other_info->carton = $request->carton;
            $product_other_info->others = $request->others;

            $product_other_info->yarn_planning = $request->yarn_planning;
            $product_other_info->knitting_planning = $request->knitting_planning;
            $product_other_info->dyeing_planning = $request->dyeing_planning;
            $product_other_info->deliver_cutting_planning = $request->deliver_cutting_planning;

            $product_other_info->cutting_planning = $request->cutting_planning;
            $product_other_info->sewing_planning = $request->sewing_planning;
            $product_other_info->shipment_planning = $request->shipment_planning;

            $product_other_info->yarn_start = $request->yarn_start;
            $product_other_info->yarn_finish = $request->yarn_finish;

            $product_other_info->knitting_start = $request->knitting_start;
            $product_other_info->knitting_finish = $request->knitting_finish;

            $product_other_info->dyeing_start = $request->dyeing_start;
            $product_other_info->dyeing_finish = $request->dyeing_finish;
            $product_other_info->deliver_cutting_received = $request->deliver_cutting_received;
            $product_other_info->cutting_start = $request->cutting_start;
            $product_other_info->cutting_finish = $request->cutting_finish;
            $product_other_info->printing_start = $request->printing_start;
            $product_other_info->printing_finish = $request->printing_finish;

            $product_other_info->sewing_start = $request->sewing_start;
            $product_other_info->sewing_finish = $request->sewing_finish;
            $product_other_info->finishing_start = $request->finishing_start;
            $product_other_info->finishing_finish = $request->finishing_finish;

            $product_other_info->shipment_start = $request->shipment_start;
            $product_other_info->shipment_finish = $request->shipment_finish;
            $product_other_info->remarks = $request->remarks;
            $product_other_info->update();
            
            if($request->mail == 1){
                $product_info = product_info::where('product_infos.id','=',$p_id)
                        ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
                        ->leftJoin('product_others_infos','product_infos.id','=','product_others_infos.proid')
                        ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
                    ->first(['product_infos.mail_p_ids','product_infos.style','product_infos.product_name','product_infos.quantity','user_infos.name','user_infos.email','product_others_infos.remarks','buyer_infos.buyer_contact_name']);
                    // dd($product_info);
                
                $buyer_mail = $product_info->email;
                $remarks = $product_info->remarks;
                $remarks = explode("\r\n",$remarks);
                if (($key = array_search("", $remarks)) !== false) {
                    unset($remarks[$key]);
                }
                $mail_person=$product_info->mail_p_ids;
                $style = $product_info->style;
                $product_name = $product_info->product_name;
                $quantity = $product_info->quantity;
                $buyer_contact_name = $product_info->buyer_contact_name;

                $sub = $style.'-'.$product_name.'-'.$quantity.'-'.$buyer_contact_name;
                // dd($sub);
                $mail_person=explode(',',$mail_person);
    
        
                // dd($mail_person,$remarks);
                $mailData = [
                    'title' => 'Remarkes List',
                    'body' => $remarks,
                ];
         
                Mail::to($buyer_mail)->cc($mail_person)->send(new UserMail($mailData,$sub));
                
                // dd("Email is sent successfully.");
            }

        return redirect(route('product_all_details',[$u_id,$p_id]));
        // return redirect()->back();
    }

    public function delete_product(Request $request){
        $del_product_id = $request->deletingId;

        $del_product_info = product_info::find($del_product_id);
        $del_product_info->delete();
        $del_product_other_info = product_others_info::find($del_product_id);
        $del_product_other_info->delete();
        return back();
    }

    public function product_img($id){
        $img = product_info::where('id','=',$id)->first()->image;
        return response()->json([
            'status'=>200,
            'image' => $img,
        ]);
    }

    public function product_remarks($id){
        $remark = product_others_info::where('proid','=',$id)->first()->remarks;
        // $remark = $product_info->remarks;
        if ($remark != null){
            $remarks = explode("\r\n",$remark);
            if (($key = array_search("", $remarks)) !== false) {
                unset($remarks[$key]);
            }
        }else{
            $remarks[] = "No Remarks";
        }

        return response()->json([
            'status'=>200,
            'remarks' => $remarks,
        ]);
    }

    public function product_status($id){
        $getStatus = product_info::find($id);
        if($getStatus->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        if($status == 1){
            product_info::where('id','=',$id)->update(['status'=>$status]);
        }else{
            product_info::where('id','=',$id)->update(['status'=>$status]);
        }
        return back();
    }
}
