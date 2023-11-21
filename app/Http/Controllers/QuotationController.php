<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    function index(){
        return view('quotation.quotationview');
    }

    function SearchbyCasNo(Request $request){
        if($request->ajax()){
            $data = product::where('casno', 'LIKE', $request->casno .'%')->get();
        }
    }
}
