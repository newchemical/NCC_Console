<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyagentlistController extends Controller
{
    function index(){
        return view('agent.index');
    }
}
