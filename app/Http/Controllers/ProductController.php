<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function view() {
       $id = request('id');
       // without model
       //$product = \DB::table('products') -> where('id',$id) ->first();
       // or using model
       //$product = \App\Product::where('id',$id) ->first();
        // or 
        $product = Product::where('id',$id) ->first();// ADD to use Product Model: use App\Product
        //hundle Exceptions if product = null use if or can use firstOrFail()
        //$product = Product::where('id',$id) ->firstOrFail();
        if(! $product){
           \abort(404);
        }


       //dd($product);
        return view('product',compact('product'));
    }
}
