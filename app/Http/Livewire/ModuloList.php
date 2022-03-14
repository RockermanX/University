<?php

namespace App\Http\Livewire;

use App\Models\Modulo;
use App\Models\Video;
use Livewire\Component;

class ModuloList extends Component
{
    public $lec_title;

    public function render()
    {
        return view('livewire.modulo-list',['modulos' =>  Modulo::all()]);
    }

    public function emTitle($lec_title){
        $this->lec_title=$lec_title;
        $this->emitUp('inTitle',"$lec_title");
    }


}

