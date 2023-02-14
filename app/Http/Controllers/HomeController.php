<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Shop;

class HomeController extends Controller
{
    public $list=[];

   
    public function index(){
        $this->list=Category::all()->take(6);
        return view('home',["list"=>$this->list]);
    }
    
    public function getallcategories()
    {
        $topic='Categories';
        $list=Category::all()->take(6);
        $level=0;   
        
        return view('categories',["list"=>$list,"topic"=>$topic,'cat'=>null,'subcat'=>null,"level"=>$level]);
    }

    public function getmaincategories($cat=null){
        $topic=$cat;
        $f=Category::where('slug_name','LIKE','%'.$cat.'%')->get();
        
        $list=Subcategory::where('category_id','=', $f[0]->id )->get()->take(6); 
         
        $level=1;    
        return view('categories',["list"=>$list,"topic"=>$topic,'cat'=> $cat,'subcat'=>null,"level"=>$level]);
    }

    public function getsubcategories($cat=null,$subcat=null){
        $list=[];
        $topic=$subcat;
        $level=2; 
        return view('categories',["list"=>$list,"topic"=>$topic,'cat'=> $cat,'subcat'=> $subcat,"level"=>$level]);
    }

    public function getprofile($shop){
       
        $data=Shop::where('slug_name','LIKE','%'.$shop.'%')->get();

        return view('profile',["shop"=>$data[0],"name"=>$data[0]->name]);
    }

  
}
