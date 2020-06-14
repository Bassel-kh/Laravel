<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function view() {
       $id = request('id');
       $product = \DB::table('products') -> where('id',$id) ->first();

       //dd($product);
        return view('products',compact('product'));
    }
}
