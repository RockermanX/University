@extends('layouts.layoutmodulo2')
@section('menu')
<livewire:modulo-list>
@endsection
@if (request()->segments()[0]=='modulos')

@isset(request()->segments()[1])
    @if (substr(decrypt(request()->segments()[1]),0,1)!='_')
            @section('leccion')
            <livewire:leccion-list>
            @endsection
            @section('chat')
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem; margin-top: 3rem">
        <div class="card-header">Preguntas {{decrypt( request()->segments()[1])}}</div>
        <div style="height: 430px;" class="card-body"id="chat">
            <div  style="overflow:scroll; height:400px;">
                @livewire('chat',['leccion_id'=> decrypt( request()->segments()[1])])
                @livewire('chat-comment')
            </div>
        </div>
    </div>
    @endsection
    @else

        @section('leccion')
        @livewire('test', ['id_mod' =>decrypt( request()->segments()[1]) ])
        @endsection
    @endif



@endisset

@endif
