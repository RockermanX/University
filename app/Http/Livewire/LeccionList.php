<?php

namespace App\Http\Livewire;

use App\Models\Leccion;
use App\Models\Video;
use Livewire\Component;

class LeccionList extends Component
{
    public $id_lec;
    public $title_lec;
    public $vid_sel;

    protected $listeners = ['inTitle' => 'inTitle'];


    public function render()
    {
        $this->id_lec= decrypt( request()->segments()[1] );
        //$toEliminate =['[{"video":"','"}]','[{}]','{','}','Nombre:','[{"leccion":"'];

        $this-> title_lec = Leccion::where('id',$this->id_lec)->value('leccion');
        $this->vid_sel= stripslashes(Video::where('leccion_id',"$this->id_lec")->value('video'));

        //$this->vid_sel= str_replace($toEliminate,'',$this->vid_sel);

        return view('livewire.leccion-list',['video'=>$this->vid_sel, 'video_name' => $this->title_lec]);
    }



    public function inTitle($title_lec){
        $this->title_lec=$title_lec;
        $this->refresh();
    }

}
