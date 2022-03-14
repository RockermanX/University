<div>
    <select class="form-select" aria-label="Default select example" wire:model="sdoc">
        @foreach ($documentos as $doc )
            <option value="{{$doc->id}}">{{$doc->version}}</option>
        @endforeach
      </select>
      @isset($sdoc)
        {!!$sdoc->contenido !!}
      @endisset

</div>
