<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanydepartmentlistController extends Controller
{
    function index(){
        return view('department.index');
    }
}
