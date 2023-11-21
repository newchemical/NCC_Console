<?php

namespace App\Http\Controllers;

use App\Models\businesscompanylist;
use Illuminate\Http\Request;

class BusinesscompanylistController extends Controller
{
    function index(){
        return view('company.companyregister');
    }

    function register(Request $request){
        // dd($request->toArray());

        $validation = $request->validate(
            [
                "name" => 'required',
                "email" => 'required',
                "contactnumber" => 'required',
                "country" => 'required',
                "state" => 'required',
                "city" => 'required',
                "zip" => 'required',
                "website" => 'required',
                "category" => 'required',
                "adress" => 'required',
            ]
        );

        $company = new businesscompanylist();
        $company->name = $validation['name'];
        $company->email = $validation['email'];
        $company->contactnumber = $validation['contactnumber'];
        $company->country = $validation['country'];
        $company->state = $validation['state'];
        $company->city = $validation['city'];
        $company->zip = $validation['zip'];
        $company->website = $validation['website'];
        $company->category = $validation['category'];
        $company->adress = $validation['adress'];
        $company->save();

        return redirect()->back();
    }

    function companylist(){
        $company = businesscompanylist::all()->toArray();
        $data = compact('company');
        return view('company.companylist')->with($data);
    }
}
