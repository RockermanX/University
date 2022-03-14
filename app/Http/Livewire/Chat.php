<?php

namespace App\Http\Livewire;

use App\Models\Chat as ChatModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Chat extends Component
{


    public $definicion;
    public $user_id;
    public $leccion_id;


    public function mount($leccion_id){
        $this->user_id=Auth::user()->id;
        $this->leccion_id=$leccion_id;
        $this->definicion="";
    }

    public function render()
    {
        return view('livewire.chat');
    }


    public function enviarMensaje(){
        ChatModel::insert([
            "user_id" =>  $this->user_id,
            "definicion" =>  $this-> definicion,
            "leccion_id" => $this->leccion_id,
            "parent" => NULL
        ]);
        /*
        $datos = [
             "user_id" =>  $this->user_id,
            "definicion" =>  $this-> definicion,
            "leccion_id" => $this->leccion_id,
            "parent" => NULL
        ]; */
        $this->emit('mensajeEnviado');
        $this->emit("mensajeRecibido");
    }


}
