<div style="margin-top: 3rem;">
    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            @if (sizeof($preguntas)>0)
            <form method="POST" action="{{route('exam')}}" >
                @csrf
                <input type="hidden" id="custId" name="id_mod" value="{{$id_mod}}">

                @foreach ($preguntas as $key=>$p )
                <br>
                <p>{{$p->descripcion}}: </p>

                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">

                  @foreach ($p->respuesta as $r )
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="check{{$p->id}}" id="check{{$r->id}}" value="{{$r->is_valid}}">
                    <label class="form-check-label">
                      {{$r->definicion}}
                    </label>
                  </div>
                  @endforeach
                    </div>

            @endforeach

            <button type="submit" class="btn btn-primary">Terminar</button>


              </form>
            @else
              <p>No hay valores que mostrar</p>
            @endif



        </div>
      </div>

</div>
