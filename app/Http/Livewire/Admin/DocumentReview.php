<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documento;
use Livewire\Component;

class DocumentReview extends Component
{

    public $type,$documentos,$sdoc;

    public function mount($type){
        $this->type = $type;
        $this->documentos = Documento::where('nombre',$this->type)->get();
    }

    public function render()
    {
        return view('livewire.admin.document-review');
    }
    public function sdocupdated(){
        $this->sdoc = $this->documentos->find($this->sdoc);
    }


}
