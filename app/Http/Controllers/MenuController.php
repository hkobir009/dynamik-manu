<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function menu(){

        $getdata = Menu::where('parent_id', null)->get();

        return view('welcome',compact('getdata'));

    }

    public function deshboardIndex(){
        $datas = Menu::get();
        return view('admin.deshboard',compact('datas'));
    }

    public function create(){

        return view('admin.create');
    }

    public function store(Request $request){
        $menu = new menu();
        $menu->parent_id = $request->parent_id;
        $menu->name = $request->name;
        $menu->url = $request->url;
        $menu->save();
        return redirect()->back()->with('msg','Data Insert Successfully');
    }

    public function delete(Request $request, $id){
        $id= menu::findOrFail($id);
        $id->delete();

        return redirect()->back()->with('msg','Delete successfully');
    }
}

