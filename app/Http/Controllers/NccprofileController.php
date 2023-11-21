<?php

namespace App\Http\Controllers;

use App\Models\nccprofile;
use Illuminate\Http\Request;

class NccprofileController extends Controller
{
    function index(){
        $profile = nccprofile::find(1);
        $data = compact('profile');
        return view('nccprofile.registerProfile')->with($data);
    }

    function update(Request $request){
        // dd($request->toArray());

        $validation = $request->validate([
            "name" => 'required',
            "email" => 'required',
            "phoneno" => 'required',
            "website" => 'required',
            "gst" => 'required',
            "profit" => 'required',
            "city" => 'required',
            "zip" => 'required',
            "address" => 'required',
        ]);

        // $profile = new nccprofile();
        // $profile->name = $validation['name'];
        // $profile->email = $validation['email'];
        // $profile->phoneno = $validation['phoneno'];
        // $profile->website = $validation['website'];
        // $profile->gst = $validation['gst'];
        // $profile->profit = $validation['profit'];
        // $profile->city = $validation['city'];
        // $profile->zip = $validation['zip'];
        // $profile->address = $validation['address'];
        // $profile->save();

        $profile = nccprofile::find(1);
        $profile->name = $validation['name'];
        $profile->email = $validation['email'];
        $profile->phoneno = $validation['phoneno'];
        $profile->website = $validation['website'];
        $profile->gst = $validation['gst'];
        $profile->profit = $validation['profit'];
        $profile->city = $validation['city'];
        $profile->zip = $validation['zip'];
        $profile->address = $validation['address'];
        $profile->save();

       return redirect()->back();

    }
}
