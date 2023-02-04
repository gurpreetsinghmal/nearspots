<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $list=[
        "main-cat-1"=>"icons",
        "main-cat-2"=>"icons",
        "main-cat-3"=>"icons",
        "main-cat-4"=>"icons",
        "main-cat-5"=>"icons",
        "main-cat-6"=>"icons",
    ],
    $sublist=[
        "sub-cat-1"=>"icons",
        "sub-cat-2"=>"icons",
        "sub-cat-3"=>"icons",
        "sub-cat-4"=>"icons",
        "sub-cat-5"=>"icons",
        "sub-cat-6"=>"icons",
    ];
    public function index(){
        

        return view('home',["list"=>$this->list]);
    }

    public function getcategories(){
        
        return view('categories',["list"=>$this->list]);
    }
}
