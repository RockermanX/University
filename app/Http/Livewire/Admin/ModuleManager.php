<?php

namespace App\Http\Livewire\Admin;

use App\Models\Modulo;
use Livewire\Component;

class ModuleManager extends Component
{

    public $modulos;

    protected $listeners=['deleteM'];

    public function mount(){
        $this->modulos = Modulo::orderBy('orden','desc')->get();
    }

    public function render()
    {
        return view('livewire.admin.module-manager');
    }

    public function deleteM($id_mod){
        Modulo::where('id',$id_mod)->delete();
        $this->modulos = Modulo::all();
        return redirect()->back();
    }

}
