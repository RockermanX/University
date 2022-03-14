<div>
    <h5 class="mt-3">
        <strong>Lista de mensajes</strong>
    </h5>
    @foreach ($mensajes as $mensaje )
    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
       <div class="card-header">{{ $mensaje["name"] }}</div>
       <div class="card-body">
           <p class="card-text">{{$mensaje["definicion"]}}</p>
       </div>
     </div>

    @endforeach
   </div>
