<?php

namespace App\Http\Livewire\Admin;

use App\Models\Leccion;
use App\Models\Video;
use Livewire\Component;

class LecsmoduleManager extends Component
{
    public $mod,$lecciones;
    protected $listeners=['EliminateLec'];
    public function mount($mod){
        $this->mod = $mod;
        $this->lecciones= Leccion::where('modulo_id',$this->mod)->orderBy('orden','asc')->get();
    }


    public function render()
    {
        return view('livewire.admin.lecsmodule-manager');
    }

    public function EliminateLec($lec_id){
        Video::where('leccion_id',$lec_id)->delete();
        Leccion::where('id',$lec_id)->delete();
        $this->lecciones= Leccion::where('modulo_id',$this->mod)->get();
        return redirect()->back();
    }
}
