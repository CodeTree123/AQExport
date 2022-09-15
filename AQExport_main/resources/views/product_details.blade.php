
    @include('include.header')
    <div class="d-flex justify-content-between align-items-center my-3">
        <h4 class="">Product Details</h4>
        <a class="btn btn-sm btn-success" href="{{route('product_details')}}">Back To Order</a>
    </div>
    <div class="table-responsive">
    <table id="example2" class="table table-bordered text-center" >
        <thead>
        <tr class="">

                <th rowspan="3" class="text-center " scope="col">#</th>
                <th colspan="3" class="text-center aq_buyer_detial">BUYER DETAILS</th>
                <th colspan="11" class="text-center aq_po_info">As Per PO Information</th>
                <th rowspan="3" class="text-center aq_buyer_factory">FACTORY NAME</th>
                <th colspan="4" class="text-center aq_buyer_lab_dip">Lab Dip Approval</th>
                <th colspan="7" class="text-center aq_buyer_sampling">Sampling</th>
                <th colspan="16" class="text-center aq_buyer_accessories">ACCESSORIES DETAILS</th>
                <th colspan="11" class="text-center aq_buyer_fabric_detail">Fabric Details</th>
                <th colspan="13" class="text-center aq_buyer_production_status">Production Status</th>
                <th rowspan="3" class="aq_buyer_remarks">Remarks</th>
                @if($user->role_id == 1 || $user->role_id == 3 || $user->role_id == 4)
                <th rowspan="3" class="aq_buyer_action">Action</th>
                @endif
                @if($user->role_id == 1)
                <th rowspan="3" class="aq_buyer_status">Status</th>
                @endif
            </tr>
            <tr>
                <th rowspan="2" scope="col" class="aq_buyer_detial">BUYER NAME</th>
                <th rowspan="2" scope="col" class="aq_buyer_detial">CONTACT PERSON</th>
                <th rowspan="2" scope="col" class="aq_buyer_detial">COUNTRY</th>
                <th rowspan="2" scope="col" class="aq_po_info">Order #</th>
                <th rowspan="2" scope="col" class="aq_po_info">Style #</th>
                <th rowspan="2" scope="col" class="aq_po_info">PRODUCT NAME</th>
                <th rowspan="2" scope="col" class="aq_po_info">PHOTO</th>
                <th rowspan="2" scope="col" class="aq_po_info">PO Issue Date</th>
                <th rowspan="2" scope="col" class="aq_po_info">Shipment Date</th>
                <th rowspan="2" scope="col" class="aq_po_info">Fabric/Yarn Details</th>
                <th rowspan="2" scope="col" class="aq_po_info">GSM</th>
                <th rowspan="2" scope="col" class="aq_po_info">Descriptions</th>
                <th rowspan="2" scope="col" class="aq_po_info">SIZE</th>
                <th rowspan="2" scope="col" class="aq_po_info">Quantity</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th rowspan="2" scope="col" class="aq_buyer_lab_dip">Color Way</th>
                <th rowspan="2" scope="col" class="aq_buyer_lab_dip">Print Stricke Offs</th>
                <th rowspan="2" scope="col" class="aq_buyer_lab_dip">Comments Received</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">Style Approval</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">Style Comments</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">PP Sample</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">PP Comments</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">Production Sample</th>
                <th rowspan="2" scope="col" class="aq_buyer_sampling">Production Comments</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">Planning</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">MAIN LABEL</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">CARE LABEL</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">SIZE LABEL</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">FLAG LABEL</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">PATCH LABEL</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">HANG TAG</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">HANG TAG STRING</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">DRAW STRING</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">EYELET/BUTTON</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">ELASTIC</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">ZIPPER</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">POLY</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">GUM TAPE</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">CARTON</th>
                <th rowspan="2" scope="col" class="aq_buyer_accessories">OTHERS</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_yarn">Yarn</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_knitting">Knitting</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_dying">Dyeing</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th rowspan="2" scope="col" class="aq_buyer_fab_store_del">Fab  Store del to cutting</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_production_status">Cutting</th>
                <th colspan="2" scope="col" class="aq_buyer_production_status">Printing</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_production_status">Sewing</th>
                <th colspan="2" scope="col" class="aq_buyer_production_status">Finishing</th>
                <th rowspan="2" scope="col" class="aq_buyer_planning">PLANNING</th>
                <th colspan="2" scope="col" class="aq_buyer_production_status">Shipment</th>
            </tr>
            <tr>
                <th scope="col" class="aq_buyer_yarn">Yarn Rcv Start</th>
                <th scope="col" class="aq_buyer_yarn">Yarn Rcv Finish</th>
                <th scope="col" class="aq_buyer_knitting">Knitting Start</th>
                <th scope="col" class="aq_buyer_knitting">Knitting Finish</th>
                <!-- <th scope="col" class="">Knitting Finish</th> -->
                <th scope="col" class="aq_buyer_dying">Dyeing Start</th>
                <th scope="col" class="aq_buyer_dying">Dyeing Finish</th>
                <th scope="col" class="aq_buyer_production_status">Cutting Start Date</th>
                <th scope="col" class="aq_buyer_production_status">Cutting Finish Date</th>
                <th scope="col" class="aq_buyer_production_status">Printing Start Date</th>
                <th scope="col" class="aq_buyer_production_status">Printing Finish Date</th>
                <th scope="col" class="aq_buyer_production_status">SEWING Date</th>
                <th scope="col" class="aq_buyer_production_status">SEWING Finish Date</th>
                <th scope="col" class="aq_buyer_production_status">Finishing Start Date</th>
                <th scope="col" class="aq_buyer_production_status">Finishing Finish Date</th>
                <th scope="col" class="aq_buyer_production_status">Shipment Start Date</th>
                <th scope="col" class="aq_buyer_production_status">Shipment Finish Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="" scope="rows">1</td>
                <td class="aq_buyer_detial">{{$product_info->name}}</td>
                <td class="aq_buyer_detial">{{$product_info->buyer_contact_name}}</td>
                <td class="aq_buyer_detial">{{$product_info->buyer_country}}</td>
                <td class="aq_po_info">{{$product_info->order_no}}</td>
                <td class="aq_po_info">{{$product_info->style}}</td>
                <td class="aq_po_info">{{$product_info->product_name}}</td>
                <td class="aq_po_info" style="min-width: 150px;">
                    <button type="button" class="btn preview_product_img" value="{{$product_info->id}}">
                        <img src="{{asset('uploads/product/'.$product_info->image)}}" alt="" class="w-100">
                    </button>
                </td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->po_issue_date}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->shipment_date}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->febric_details}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->gsm}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->description}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->size}}</td>
                <td class="aq_po_info" style="min-width: 100px;">{{$product_info->quantity}}</td>
                <td class="aq_buyer_factory" style="min-width: 100px;">{{$product_info->factory_name}}</td>

                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->plannig_lab}}</td>
                <!-- <td class="" style="min-width: 100px;">{{$product_info->lab_received}}</td> -->
                @if($product_info->color_way == null)
                <td class="aq_buyer_lab_dip" style="min-width: 100px;">{{$product_info->color_way}}</td>
                @elseif($product_info->plannig_lab >= $product_info->color_way)
                <td  class="bg-success" style="min-width: 100px;">{{$product_info->color_way}}</td>
                @else
                <td  class="bg-danger" style="min-width: 100px;">{{$product_info->color_way}}</td>
                @endif
                <!-- <td class="" style="min-width: 100px;">{{$product_info->color_way}}</td> -->
                @if($product_info->print_stricke_offs == null)
                <td class="aq_buyer_lab_dip" style="min-width: 100px;">{{$product_info->print_stricke_offs}}</td>
                @elseif($product_info->plannig_lab >= $product_info->print_stricke_offs)
                <td  class="bg-success" style="min-width: 100px;">{{$product_info->print_stricke_offs}}</td>
                @else
                <td   class="bg-danger" style="min-width: 100px;">{{$product_info->print_stricke_offs}}</td>
                @endif
                <!-- <td class="" style="min-width: 100px;">{{$product_info->print_stricke_offs}}</td> -->
                <td class="aq_buyer_lab_dip" style="min-width: 100px;">{{$product_info->comments_received}}</td>
                @if($product_info->style_approval == null)
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->style_approval}}</td>
                @elseif($product_info->plannig_lab >= $product_info->style_approval)
                <td  class="bg-success" style="min-width: 100px;">{{$product_info->style_approval}}</td>
                @else
                <td   class="bg-danger" style="min-width: 100px;">{{$product_info->style_approval}}</td>
                @endif
                <!-- <td class="" style="min-width: 100px;">{{$product_info->style_approval}}</td> -->
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->style_comments}}</td>
                
                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->plannig_sample}}</td>
                <!-- <td class="" style="min-width: 100px;">{{$product_info->sample_received}}</td> -->
                @if($product_info->pp_sample == null)
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->pp_sample}}</td>
                @elseif($product_info->plannig_sample >= $product_info->pp_sample)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->pp_sample}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->pp_sample}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->pp_sample}}</td> -->
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->pp_comments}}</td>
                @if($product_info->production_sample == null)
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->production_sample}}</td>
                @elseif($product_info->plannig_sample >= $product_info->production_sample)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->production_sample}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->production_sample}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->production_sample}}</td> -->
                <td class="aq_buyer_sampling" style="min-width: 100px;">{{$product_info->production_comments}}</td>

                <!-- <td style="min-width: 100px;">{{$product_info->proid}}</td> -->
                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->accessories_planning}}</td>

                @if($product_info->main_label == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->main_label}}</td>
                @elseif($product_info->accessories_planning >= $product_info->main_label)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->main_label}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->main_label}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->main_label}}</td> -->
                @if($product_info->care_label == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->care_label}}</td>
                @elseif($product_info->accessories_planning >= $product_info->care_label)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->care_label}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->care_label}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->care_label}}</td> -->
                @if($product_info->size_label == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->size_label}}</td>
                @elseif($product_info->accessories_planning >= $product_info->size_label)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->size_label}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->size_label}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->size_label}}</td> -->
                @if($product_info->flag_label == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->flag_label}}</td>
                @elseif($product_info->accessories_planning >= $product_info->flag_label)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->flag_label}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->flag_label}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->flag_label}}</td> -->
                @if($product_info->patch_label == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->patch_label}}</td>
                @elseif($product_info->accessories_planning >= $product_info->patch_label)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->patch_label}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->patch_label}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->patch_label}}</td> -->
                @if($product_info->hang_tag == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->hang_tag}}</td>
                @elseif($product_info->accessories_planning >= $product_info->hang_tag)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->hang_tag}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->hang_tag}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->hang_tag}}</td> -->
                @if($product_info->hang_tag_string == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->hang_tag_string}}</td>
                @elseif($product_info->accessories_planning >= $product_info->hang_tag_string)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->hang_tag_string}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->hang_tag_string}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->hang_tag_string}}</td> -->
                @if($product_info->draw_string == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->draw_string}}</td>
                @elseif($product_info->accessories_planning >= $product_info->draw_string)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->draw_string}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->draw_string}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->draw_string}}</td> -->
                @if($product_info->eyelet == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->eyelet}}</td>
                @elseif($product_info->accessories_planning >= $product_info->eyelet)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->eyelet}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->eyelet}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->eyelet}}</td> -->
                @if($product_info->elastic == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->elastic}}</td>
                @elseif($product_info->accessories_planning >= $product_info->elastic)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->elastic}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->elastic}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->elastic}}</td> -->
                @if($product_info->zipper == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->zipper}}</td>
                @elseif($product_info->accessories_planning >= $product_info->zipper)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->zipper}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->zipper}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->zipper}}</td> -->
                @if($product_info->poly == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->poly}}</td>
                @elseif($product_info->accessories_planning >= $product_info->poly)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->poly}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->poly}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->poly}}</td> -->
                @if($product_info->gum_tape == null)
                <td class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->gum_tape}}</td>
                @elseif($product_info->accessories_planning >= $product_info->gum_tape)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->gum_tape}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->gum_tape}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->gum_tape}}</td> -->
                @if($product_info->carton == null)
                <td  class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->carton}}</td>
                @elseif($product_info->accessories_planning >= $product_info->carton)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->carton}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->carton}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->carton}}</td> -->
                <td  class="aq_buyer_accessories" style="min-width: 100px;">{{$product_info->others}}</td>

                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->yarn_planning}}</td>

                @if($product_info->yarn_start == null)
                <td  class="aq_buyer_yarn" style="min-width: 100px;">{{$product_info->yarn_start}}</td>
                @elseif($product_info->yarn_planning >= $product_info->yarn_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->yarn_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->yarn_start}}</td>
                @endif

                @if($product_info->yarn_finish == null)
                <td class="aq_buyer_yarn" style="min-width: 100px;">{{$product_info->yarn_finish}}</td>
                @elseif($product_info->yarn_planning >= $product_info->yarn_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->yarn_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->yarn_finish}}</td>
                @endif
                
                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->knitting_planning}}</td>

                @if($product_info->knitting_start == null)
                <td  class="aq_buyer_knitting" style="min-width: 100px;">{{$product_info->knitting_start}}</td>
                @elseif($product_info->knitting_planning >= $product_info->knitting_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->knitting_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->knitting_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->knitting_start}}</td> -->
                @if($product_info->knitting_finish == null)
                <td  class="aq_buyer_knitting" style="min-width: 100px;">{{$product_info->knitting_finish}}</td>
                @elseif($product_info->knitting_planning >= $product_info->knitting_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->knitting_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->knitting_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->knitting_finish}}</td> -->
                <td class="aq_buyer_planning    " style="min-width: 100px;">{{$product_info->dyeing_planning}}</td>
                
                @if($product_info->dyeing_start == null)
                <td class="aq_buyer_dying" style="min-width: 100px;">{{$product_info->dyeing_start}}</td>
                @elseif($product_info->dyeing_planning >= $product_info->dyeing_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->dyeing_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->dyeing_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->dyeing_start}}</td> -->
                @if($product_info->dyeing_finish == null)
                <td class="aq_buyer_dying" style="min-width: 100px;">{{$product_info->dyeing_finish}}</td>
                @elseif($product_info->dyeing_planning >= $product_info->dyeing_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->dyeing_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->dyeing_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->dyeing_finish}}</td> -->
                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->deliver_cutting_planning}}</td>

                @if($product_info->deliver_cutting_received == null)
                <td class="aq_buyer_fab_store_del" style="min-width: 100px;">{{$product_info->deliver_cutting_received}}</td>
                @elseif($product_info->deliver_cutting_planning >= $product_info->deliver_cutting_received)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->deliver_cutting_received}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->deliver_cutting_received}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->deliver_cutting_received}}</td> -->

                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->cutting_planning}}</td>

                @if($product_info->cutting_start == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->cutting_start}}</td>
                @elseif($product_info->cutting_planning >= $product_info->cutting_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->cutting_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->cutting_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->cutting_start}}</td> -->
                @if($product_info->cutting_finish == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->cutting_finish}}</td>
                @elseif($product_info->cutting_planning >= $product_info->cutting_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->cutting_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->cutting_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->cutting_finish}}</td> -->
                @if($product_info->printing_start == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->printing_start}}</td>
                @elseif($product_info->cutting_planning >= $product_info->printing_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->printing_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->printing_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->printing_start}}</td> -->
                @if($product_info->printing_finish == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->printing_finish}}</td>
                @elseif($product_info->cutting_planning >= $product_info->printing_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->printing_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->printing_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->printing_finish}}</td> -->

                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->sewing_planning}}</td>
                
                @if($product_info->sewing_start == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->sewing_start}}</td>
                @elseif($product_info->sewing_planning >= $product_info->sewing_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->sewing_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->sewing_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->sewing_start}}</td> -->
                @if($product_info->sewing_finish == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->sewing_finish}}</td>
                @elseif($product_info->sewing_planning >= $product_info->sewing_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->sewing_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->sewing_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->sewing_finish}}</td> -->
                @if($product_info->finishing_start == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->finishing_start}}</td>
                @elseif($product_info->sewing_planning >= $product_info->finishing_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->finishing_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->finishing_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->finishing_start}}</td> -->
                @if($product_info->finishing_finish == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->finishing_finish}}</td>
                @elseif($product_info->sewing_planning >= $product_info->finishing_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->finishing_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->finishing_finish}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->finishing_finish}}</td> -->
                <td class="aq_buyer_planning" style="min-width: 100px;">{{$product_info->shipment_planning}}</td>

                @if($product_info->shipment_start == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->shipment_start}}</td>
                @elseif($product_info->shipment_planning >= $product_info->shipment_start)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->shipment_start}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->shipment_start}}</td>
                @endif
                <!-- <td style="min-width: 100px;">{{$product_info->shipment_start}}</td> -->
                @if($product_info->shipment_finish == null)
                <td class="aq_buyer_production_status" style="min-width: 100px;">{{$product_info->shipment_finish}}</td>
                @elseif($product_info->shipment_planning >= $product_info->shipment_finish)
                <td class="bg-success" style="min-width: 100px;">{{$product_info->shipment_finish}}</td>
                @else
                <td class="bg-danger" style="min-width: 100px;">{{$product_info->shipment_finish}}</td>
                @endif
                <!-- <td>{{$product_info->shipment_finish}}</td> -->
                <!-- <td>{{$product_info->remarks}}</td> -->
                <td>
                    <button class="btn btn-sm btn-success" role="button" data-bs-toggle="modal" data-bs-target="#remarkes">View</button>
                </td>
                @if($user->role_id == 1 || $user->role_id == 3 || $user->role_id == 4)
                <td style="min-width: 210px;">  
                    @if($user->role_id == 1)   
                    <a class="btn btn-sm btn-success" href="{{route('product_add_date_form',[$product_info->id])}}" role="button">Add Dates</a>
                    <a class="btn btn-sm btn-success" href="{{route('product_edit_form',[$product_info->id])}}" role="button">Edit</a>
                    <!-- <a class="btn btn-sm btn-success" href="#" role="button">Delete</a> -->
                    <button class="btn btn-sm btn-success delete-product" role="button" value="{{$product_info->id}}">Delete</button>
                    @elseif($user->role == 3 || $user->role_id == 4)
                    <a class="btn btn-sm btn-success" href="{{route('product_edit_form',[$product_info->id])}}" role="button">Edit</a>
                    @endif
                </td>
                @endif
                @if($user->role_id == 1)
                <td>
                    @if($product_info->status == "1")
                    <a class="btn btn-sm btn-success" href="{{route('product_status',[$product_info->id])}}" role="button">Done</a>
                    @else
                    <a class="btn btn-sm btn-success" href="{{route('product_status',[$product_info->id])}}" role="button">pending</a>
                    @endif
                </td>
                @endif
            </tr>

        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>
</div>

<!-- Modal Product Image view -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content img_preview_content">
            <div class="modal-header img_preview_header justify-content-end py-0">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body pt-0" id="test">
                <!-- <p>hello</p> -->
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Modal Product Remarks -->
<div class="modal fade" id="remarkes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <ol>
                    @forelse($remarks as $remark)
                    <li>{{$remark}}</li>
                    @empty
                    <p>There was no remarks yet.</p>
                    @endforelse
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal For Delete Product -->
<div class="modal fade " id="del-Product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Product Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_product')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-product-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-blue-grey  btn-sm">Yes,Delete</button>
                        <!-- Modal Footer end -->
                        </div>
                    </form>
                </div>
                <!-- Modal Body end -->
            </div>
        </div>
    </div>
 <!-- Modal end -->

    @include('include.footer')

    <script>
        
        $(document).ready(function(){

            $(document).on('click', '.preview_product_img',function(){
                var id = $(this).val();
                // alert(id);
                $('#exampleModal').modal('show');
                $.ajax({
                    type:"GET",
                    url: "/product_img/"+id,
                    success: function(response){
                        // console.log(response.image);
                        $("#test").html("");
                        $("#test").append('\
                            \
                            <img src="/uploads/product/'+response.image+'" alt="" class="product_img">\
                        ');
                    }
                });
            });

            $(document).on('click', '.delete-product',function(){
                var deleteProductId = $(this).val();
                // alert(deletePatientId);
                $("#del-Product").modal('show');
                $('#del-product-id').val(deleteProductId);
            });
        });
    </script>