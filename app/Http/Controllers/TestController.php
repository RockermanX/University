<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
 public function store(Request $request){

     $data=array();
     foreach($request->request as $r){
         array_push($data,$r);
     }
     $id_mod=$data[1];
   unset($data[0],$data[1]);

    return view('test.result')->with(['data' => $data,'id_mod'=>$id_mod]);
 }
}
