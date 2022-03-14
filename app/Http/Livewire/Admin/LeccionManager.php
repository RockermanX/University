<?php

namespace App\Http\Livewire\Admin;

use App\Models\Leccion;
use App\Models\Video;
use Livewire\Component;

class LeccionManager extends Component
{
    public $lec,$data,$videos;

    protected $listeners=['deleteVid'];

    public function mount($lec){
        $this->lec=$lec;
        $this->data=Leccion::where('id',$this->lec)->first();
        $this->videos=Video::where('leccion_id',$this->lec)->get();
    }

    public function render()
    {
        return view('livewire.admin.leccion-manager');
    }

    public function deleteVid($id_v){
        Video::where('id',$id_v)->delete();
        $this->videos=Video::where('leccion_id',$this->lec)->get();
        $this->render();
    }
}
