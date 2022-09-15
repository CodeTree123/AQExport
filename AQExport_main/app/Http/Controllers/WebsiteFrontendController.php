<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class websiteFrontendcontroller extends Controller
{
    function headers(){ 
        return view('website.component.headers');
    }
    function footers(){ 
        return view('website.component.footers');
    }
    function index(){ 
        return view('website.index');
    }
    function about_us(){ 
        return view('website.about_us');
    }
    function gallery(){ 
        return view('website.gallery');
    }
    function contact_us(){ 
        return view('website.contact_us');
    } 
    function contact_us_mail(Request $request){ 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        // dd($request->all());
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    } 
}
