<?php

namespace App\Http\Livewire;

use App\Models\CentralUser;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class WelcomeD extends Component
{

    public $uid,$user,$padre;

    public function mount($uid = null){
        $this->uid = $uid;
        if($this->uid !=null){
            try{
                $this->user = CentralUser::where('id_users',$this->uid)->firstOrFail();
                $this->padre = $this->user->spadre() ;
            }catch(ModelNotFoundException $e){
                $this->id=null;
            }

        }
    }

    public function render()
    {
        return view('livewire.welcome-d');
    }
}
