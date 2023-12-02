<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function shopIndex(Request $request){
    // Assuming you have the shop parameter in the callback URL
    $shop = $request->input('shop');

    // If you want just the shop ID (assuming the shop parameter has a format like "example.myshopify.com")
    $shopId = explode('.', $shop)[0];

    // Now you can use $shopId as the Shopify shop ID
    // ...

    // Or, if you prefer to use the entire shop domain, you can use $shop
    // ...

    // Example response
    return view('shop.index', ['shopId' => $shopId, 'shop' => $shop]);
    }
}
