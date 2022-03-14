<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

 public function create(Request $request){

    if($request['lec_id']!=null){
        Video::create(['video'=>$request['embed'],'estado'=>$request['estado'],'leccion_id'=> $request['lec_id']]);
         }
         return redirect()->back();


 }


  public function edit(Request $request){
      if($request['vid_id']!=null){
        Video::where('id',$request['vid_id'])->update(['video'=>$request['embed'],'estado'=> $request['estado']]);

      }
      return redirect("/admin/adleccion/".$request['lec_id']);
  }
}
