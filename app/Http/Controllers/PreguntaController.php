<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;


class PreguntaController extends Controller
{

public function create(Request $request){


    if($request['ex_id']!=null && $request['descripcion']!=null){
        Pregunta::create(['descripcion'=> $request['descripcion'],'examen_id'=> $request['ex_id']]);
    }
    return redirect()->back();
}

}
