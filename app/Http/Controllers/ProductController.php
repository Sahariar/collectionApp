<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productIndex(Request $request){
        //check if it is a POST request
        $products = Product::with('collection')
        ->where('shop_id', auth()->user()->id)
        ->get();
        return view('product.index', compact('products'));
    }
}
