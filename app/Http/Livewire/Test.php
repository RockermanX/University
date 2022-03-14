<?php

namespace App\Http\Livewire;

use App\Models\Examen;
use App\Models\Pregunta;
use Livewire\Component;

class Test extends Component
{
    public $id_mod,$examen,$preguntas;

    public function mount($id_mod=""){
        $this->id_mod = $id_mod;
        $this->id_mod = str_replace('_','',$this->id_mod);
        $this->examen= Examen::where('modulo_id',$this->id_mod)->first();
        $this->preguntas= Pregunta::where('examen_id',$this->examen['id'])->get();

    }

    public function render()
    {

        return view('livewire.test',['preguntas'=> $this->preguntas]);
    }

}
