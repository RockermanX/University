<?php

namespace App\Http\Controllers;

use App\Models\Leccion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LeccionController extends Controller
{

    public function create(Request $request){

        if($request['m_id']!=null && $request['nombre']!=null){
            if($request->has('orden')){

                try{
                    Leccion::where('modulo_id',$request['m_id'])->where('orden',$request['orden'])->firstOrFail();

                    return redirect()->back()->withFail('El orden elegido ya existe.');
                }catch(ModelNotFoundException $e){

                    Leccion::create(['leccion'=> $request['nombre'],'estado'=> $request['estado'], 'modulo_id'=>$request['m_id'],'orden'=> $request['orden']]);
                }

            }else{
                Leccion::create(['leccion'=> $request['nombre'],'estado'=> $request['estado'], 'modulo_id'=>$request['m_id']]);
            }
        }else{
            return redirect()->back()->withFail('Nombre no definido.');
        }
        return redirect()->back()->withSuccess('Creado correctamente.');
    }

    public function edit(Request $request){

        if($request['id_lec']!=null){
            if($request['leccion']!=null ){

                Leccion::where('id',$request['id_lec'])->update(['leccion'=>$request['leccion'],'estado'=> $request['estado']]);

            }
        }
        return redirect()->back();
    }



}
