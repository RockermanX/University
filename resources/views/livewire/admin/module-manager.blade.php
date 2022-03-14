
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

        <tbody>
            <tr>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                        Crear
                      </button>
                    <th scope="col">#</th>
                    <th scope="col">Orden</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Opciones</th>
              </tr>
            @foreach ($modulos as $mod )
            <tr>
                <th scope="row">{{$mod->id}}</th>
                <td>{{$mod->orden}}</td>
                <td>{{$mod->modulo}}</td>

                <td>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changenameModal{{$mod->id}}">
                    Cambiar nombre
                  </button>
                  <a class="btn btn-primary" href="{{route('admodlec',$mod->id)}}" role="button">Lecciones</a>
                  <a class="btn btn-primary" href="{{route('admodtest',$mod->id)}}" role="button">Evaluaciones</a>
                  <button type="button" class="btn btn-danger" wire:click="$emit('deleteM',{{$mod->id}})">
                    Eliminar
                  </button>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

      @foreach ($modulos as $mod )

      <form method="POST" action="{{route('admodulo/edit')}}">
        @csrf
        <div class="modal fade" id="changenameModal{{$mod->id}}" tabindex="-1" aria-labelledby="changeModallabel{{$mod->id}}" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="changeModallabel{{$mod->id}}">Modificar nombre</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="modulo_id" value="{{$mod->id}}">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" name="modulo_name" class="form-control" id="inputName" placeholder="{{$mod->modulo}}">
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

      @endforeach
      <form method="POST" action="{{route('admodulo/create')}}">
        @csrf
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Crear Modulo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" name="modulo_name" class="form-control" id="inputName" placeholder="Nombre">
                      </div>
                    <div class="mb-3">
                        <label for="selectEstado" class="form-label">Estado</label>
                        <select id="selectEstado" class="form-select" aria-label="Default select example" name="estado">
                            <option value="1" selected>Activo</option>
                            <option value="0">Inactivo</option>
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
