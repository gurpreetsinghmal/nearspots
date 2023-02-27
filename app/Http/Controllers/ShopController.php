<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class ShopController extends Controller
{

  public function save(Request $request){
        $change=0;

    //  required params for api
    // localhost:8000/api/shop/save
    // id,logo,banner,category,subcategory,address,owner,short_description
    // website,facebook,whatsapp,instagram,twitter,linkedin,lat,lng

        $data=Shop::find($request->id);
        $id=$request->id;
        if($request->has('logo')){
            $image=$request->logo;
            $name=$id.'-logo.'.$image->getClientOriginalExtension();
            $path=public_path('upload');
            $image->move($path,$name);
            $data->logo='upload/'.$name;
           
           
        }
        if($request->has('banner')){
            $image=$request->banner;
            $name=$id.'-banner.'.$image->getClientOriginalExtension();
            $path=public_path('upload');
            $image->move($path,$name);
            $data->banner='upload/'.$name;
           
        }

        $data->category_id=$request->category;
        $data->subcategory_id=$request->subcategory;
        $data->address=$request->address;
        $data->owner=$request->owner;
        $data->short_description=$request->short_description;
        $data->website=$request->website;
        $data->facebook=$request->facebook;
        $data->whatsapp=$request->whatsapp;
        $data->instagram=$request->instagram;
        $data->twitter=$request->twitter;
        $data->linkedin=$request->linkedin;
        $data->lat=$request->lat;
        $data->lng=$request->lng;

        $change=$data->save();
        if($change==1)
        return response()->json(['message'=>'Data Saved Successfully'],200);
        else
        return response()->json(['message'=>'Something Went Wrong'],200);
        
  }

  public function create(Request $request){
    $change=0;
    //  required params for api
    //  localhost:8000/api/shop/create
    // name
    // city
    // state

    if($request->has('name')){
      $data=new Shop();
      $data->name=$request->name;
      $data->slug_name= Str::slug($request->name);
      $data->state_id=$request->state;
      $data->city_id=$request->city;
      $change=$data->save();
  }

    if($change==1)
    return response()->json(['message'=>'Shop Created Successfully'],200);
    else
    return response()->json(['message'=>'Something Went Wrong'],200);
    
  }
}
