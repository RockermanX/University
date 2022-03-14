@extends('layouts.layoutadmin')

@section('head')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('content')
<form method="POST" action="{{route('adcontrato/upload')}}">
    @csrf
<div class="card">

    <div class="card-body">


        <input type="hidden" class="form-control" id="InputName" name="nombre" value="contrato">

          <div class="mb-3">
            <label for="InputName" class="form-label">Version</label>
            <input type="text" class="form-control" id="InputName" name="version">
          </div>

        <textarea name="editor" ></textarea>

    <script>
        CKEDITOR.replace('editor');
    </script>

<button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </div>



</form>


@endsection
