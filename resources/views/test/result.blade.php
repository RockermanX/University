@extends('layouts.layoutmodulo2')
@section('menu')
<livewire:modulo-list>
@endsection
@section('leccion')

@livewire('test-result', ['data' => $data,'id_mod' =>$id_mod])

@endsection
