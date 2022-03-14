
<div>

    <div class="card">
    <div class="card-header">
      Modificar pregunta
    </div>
    <div class="card-body">

      <p class="card-text">{{$pregunta}}</p>
      @isset($respuestas)
      <table class="table">
        <thead>
          <tr>

            <th scope="col">Definicion</th>
            <th scope="col">Valido</th>
            <th scope="col">Opciones</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($respuestas as $r )
            <tr>

                <td>{{$r->definicion}}</td>
                @if ($r->is_valid=='1')
                    <td>Si</td>
                @else
                    <td>No</td>
                @endif
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#answerModal{{$r->id}}">
                    Modificar
                  </button>
                  <button type="button" class="btn btn-danger" wire:click="deleteAnswer({{$r->id}})">
                    Eliminar
                  </button>


                </td>

              </tr>



            @endforeach
            <tr><td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                Agregar
              </button></td></tr>
        </tbody>
      </table>


      @endisset


    </div>
  </div>
  @isset($respuestas)
  @foreach ( $respuestas as $r )
  <form method="POST" action="{{route('adanswer/edit')}}">
  <div class="modal fade" id="answerModal{{$r->id}}" tabindex="-1" aria-labelledby="answerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="answerModalLabel">Modificar respuesta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
            <input type="hidden" name="id_p" value="{{$p_id}}">
            <input type="hidden" name="id_m" value="{{$p_id}}">
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="{{$r->definicion}}" aria-label="Definicion" name="definicion">
              </div>
              <select class="form-select" aria-label="Default select example" name="valid">
              @if ($r->is_valid==1)

                <option selected value="1">Valida</option>
                <option value="0">No valida</option>
                @else
                <option selected value="0">No Valida</option>
                <option value="1">Valida</option>
               @endif
            </select>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
  @endforeach


  <form method="POST" action="{{route('adanswer/create')}}">
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createModalabel">Crear respuesta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              @csrf
              <input type="hidden" name="id_p" value="{{$p_id}}">

              <div class="input-group flex-nowrap">
                  <input type="text" class="form-control" placeholder="Definicion" aria-label="Definicion" name="definicion">
                </div>
                <select class="form-select" aria-label="Default select example" name="valid">

                  <option selected value="0">No Valida</option>
                  <option value="1">Valida</option>

              </select>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  @endisset

</div>

