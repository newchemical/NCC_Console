<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Illuminate\Http\Request;

class HRController extends Controller
{
    function index(){
        return view('employee.register');
    }

    function getAllEmployee(){
        $employee = HR::all()->toArray();
        $data = compact('employee');
        return view('employee.employeeList')->with($data);
    }

    function register(Request $request){
        // dd($request->all());

        $validation = $request->validate(
            [
                "fname" => 'required',
                "lname" => 'required',
                "fatherName" => 'required',
                "email" => 'required|unique:h_r_s,email',
                "phoneNumber" => "required|unique:h_r_s,phoneNumber",
                "address" => 'required',
            ]
        );

        $hr = new HR();
        $hr->fname = $validation['fname'];
        $hr->lname = $validation['lname'];
        $hr->fatherName = $validation['fatherName'];
        $hr->email = $validation['email'];
        $hr->phoneNumber = $validation['phoneNumber']; 
        $hr->address = $validation['address']; 
        $hr->save();
        return redirect()->back()->with('status',`$validation[fname] is successfully registered`);
    }

    function edit($id){
        $emp = HR::find($id)->toArray();
        $data = compact('emp');
        return view('employee.permission')->with($data);
    }

    function update($id,Request $request){
        $validation = $request->validate(
            [
                "permission"    => "required"
            ]
        );
        $emp = HR::find($id);
        $emp->role = $validation['permission'];
        $emp->save();
        
        return redirect(route('getAllEmployee'));

    }
}
