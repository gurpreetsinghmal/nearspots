<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveshopController extends Controller
{

  public function save(Request $request){
        $change=0;
        $id=$request->id;
        if($request->has('logo')){
            $image=$request->logo;
            $name=$id.'-logo.'.$image->getClientOriginalExtension();
            $path=public_path('upload');
            $image->move($path,$name);
            $change=1;
           
        }
        if($request->has('banner')){
            $image=$request->banner;
            $name=$id.'-banner.'.$image->getClientOriginalExtension();
            $path=public_path('upload');
            $image->move($path,$name);
            $change=1;
         
        }
        if($change==1)
        return response()->json(['message'=>'Data Uploaded Successfully'],200);
        else
        return response()->json(['message'=>'Something Went Wrong'],200);
        
  }
}
