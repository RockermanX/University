<?php

namespace App\Http\Livewire\Admin;

use App\Models\Modulo;
use Livewire\Component;

class CertificacionLoader extends Component
{
    public $modulos;

    public function mount(){
        $this->modulos = Modulo::all();
    }


    public function render()
    {
        return view('livewire.admin.certificacion-loader');
    }
}
