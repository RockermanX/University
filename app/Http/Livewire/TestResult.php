<?php

namespace App\Http\Livewire;

use App\Models\Resultado;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TestResult extends Component
{
    public $id_mod;
    public $acum;
    public $approved=false;
    public $results;

    public function mount($data,$id_mod){
        $this->id_mod = $id_mod;
        foreach($data as $d){
            if((int)$d ==1){
                $this->acum++;
            }
        }
        if($this->acum==5){
            $this->approved=true;
            try{
                $this->results=Resultado::where('user_id','=',Auth::user()->id)->firstOrFail();
                $json= json_decode($this->results["aprobado"]);
                array_push($json,$this->id_mod);
                Resultado::where('user_id','=',Auth::user()->id)->update(["aprobado"=> json_encode($json)]);
            }catch(ModelNotFoundException $e){
                $results=array();
                array_push($results,$this->id_mod);
                $results= json_encode($results);
                Resultado::create(['aprobado'=>$results,'user_id'=>Auth::user()->id ]);
            }

        }
    }


    public function render()
    {
        return view('livewire.test-result');
    }
}
