<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function menu(){

        $getdata = menu::all();

        return view('welcome',compact('getdata'));

    }

    public function getdata(){

    }
}

