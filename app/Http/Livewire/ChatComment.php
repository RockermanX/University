<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Exception;
use Livewire\Component;

class ChatComment extends Component
{

    public $mensajes;

    public $leccion_id;

    protected $listeners =["mensajeRecibido"];

    public function mount(){
        $this->leccion_id = decrypt( request()->segments()[1]);
        $this->mensajes =[];
        $this->mensajes = Chat::join("users","users.id","=","chats.user_id")->where('leccion_id','=',decrypt( request()->segments()[1]))->get();
    }

    public function mensajeRecibido(){
        $this->mensajes =[];
        $this->mensajes = Chat::join("users","users.id","=","chats.user_id")->where('leccion_id','=',$this->leccion_id)->get();
      //  $this->mount();
    }



    public function render()
    {
        try{

        }catch(Exception $e){

        }

        return view('livewire.chat-comment');
    }
}
