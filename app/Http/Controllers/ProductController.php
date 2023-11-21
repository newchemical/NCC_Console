<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function index()
    {
        return view('product.register');
    }

    function getAllProducts()
    {
        $product =  product::all();
        return response()->json( $product);
    }

    function register(Request $request)
    {

        $validation = $request->validate(
            [

                "casno" => 'unique:products,casno',
                "catno" => 'unique:products,catno',
            ]
        );
        $uuid = Str::uuid();
        $product = new product();
        $product->name = $request['name'];
        $product->casno = $validation['casno'];
        $product->price = $request['price'];
        $product->packsize = $request['packsize'];
        $product->catno = $validation['catno'];
        $product->make = $request['make'];
        $product->save();

        return response()->json(['res' => $request['name'] . " registered successfully"]);
    }
}
