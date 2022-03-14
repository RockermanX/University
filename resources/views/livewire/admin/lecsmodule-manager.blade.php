<div>
    <div class="container-md">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                  </div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('fail')}}
                  </div>
                @endif
    <table class="table">
        <thead>
            <tr>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                        Crear
                      </button>
                    </div>

                <th scope="col">#</th>
                <th scope="col">Orden</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($lecciones as $lec )
        <tr>
            <th scope="row">{{$lec->id}}</th>
            <th scope="row">{{$lec->orden}}</th>
            <td>{{$lec->leccion}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('adleccion',$lec->id)}}" role="button">Videos</a>
                <button type="button" class="btn btn-danger" wire:click="$emit('EliminateLec',{{$lec->id}})">Eliminar</button>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
  <form action="{{route('admodlec/create')}}" method="post">
      @csrf
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear modulo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="m_id" value="{{$mod}}">
                <div class="mb-3">
                    <label for="Inputnombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Inputnombre"  name="nombre">
                          </div>

                  <div class="mb-3">
                    <label for="estadoselect" class="form-label" >Estado </label>
                    <select id="estadoselect" class="form-select" aria-label="Default select example" name="estado">
                        <option value="1" selected>Activado</option>
                        <option value="0">Desactivado</option>
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="Inputorden" class="form-label">Orden</label>
                    <input type="number" class="form-control" id="Inputorden"  name="orden">
                          </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  </form>

    </div>

</div>

