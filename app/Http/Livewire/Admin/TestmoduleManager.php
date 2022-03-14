<?php

namespace App\Http\Livewire\Admin;

use App\Models\Examen;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Livewire\Component;

class TestmoduleManager extends Component
{
    public $mod,$examen,$preguntas;

    protected $listeners=['deleteQ'];

    public function mount($mod){
        $this->mod=$mod;
        $this->examen= Examen::where('modulo_id',$this->mod)->value('id');
        $this->preguntas= Pregunta::where('examen_id',$this->examen)->get();
    }

    public function render()
    {
        return view('livewire.admin.testmodule-manager');
    }

    public function deleteQ($id_p){
        Respuesta::where('pregunta_id',$id_p)->delete();
        Pregunta::where('id',$id_p)->delete();
        $this->render();
    }

}
