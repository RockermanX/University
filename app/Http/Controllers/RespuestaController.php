<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
   public function edit(Request $request){

       if($request['id_p']!=null){
        if($request['definicion']!=null){

            if($request["valid"]==null){
                Respuesta::where('id',$request['id_r'])->update(['definicion'=> $request['definicion']]);
            }else{
                Respuesta::where('id',$request['id_r'])->update(['definicion'=> $request['definicion'],'is_valid'=> $request['valid']]);
            }


        }
       }
       return redirect('/admin/admodtest/'.$request['id_m']);
   }

   public function create(Request $request){

    if($request['id_p']!=null){
     if($request['definicion']!=null){

         if($request["valid"]!=null){
             Respuesta::create(['definicion'=>$request['definicion'],'is_valid'=> $request['valid'],'pregunta_id'=>$request['id_p']]);
             Respuesta::where('id',$request['id_r'])->update(['definicion'=> $request['definicion']]);
         }


     }
    }
    return redirect()->back()->withMessage('Creado correctamente');
}
}
