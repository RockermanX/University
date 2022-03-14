<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class AnswerLoader extends Component
{

    protected $listeners =['showAnswers','deleteQ'];
    public $p_id,$pregunta,$respuestas;
    public $uri ;
    public function render()
    {
        $this->uri= URL::current();
        return view('livewire.admin.answer-loader');
    }

    public function showAnswers($p_id){
        $this->p_id=$p_id;
        $this->pregunta= Pregunta::where('id',$this->p_id)->value('descripcion');
        $this->respuestas=Respuesta::where('pregunta_id',$this->p_id)->get();
        $this->render();
    }
    public function deleteAnswer($r_id){
        Respuesta::where('id',$r_id)->delete();
         $this->respuestas=Respuesta::where('pregunta_id',$this->p_id)->get();

    }

    public function deleteQ(){
        $this->render();
    }
}
