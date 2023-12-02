<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function shopIndex(){
        return View('shop.index');
    }
}
