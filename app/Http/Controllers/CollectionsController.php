<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CollectionsController extends Controller
{
    //
    public function groupIndex(){
        return view('group.index');
    }
}
