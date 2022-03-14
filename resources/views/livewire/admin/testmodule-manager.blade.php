<div>
    <div class="container">
        <div class="container-sm">
            <table class="table">
                <thead>
                    <tr>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                                Crear
                              </button>
                      </tr>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Examen relacionado</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($preguntas as $p )
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->descripcion}}</td>
                        <td>{{$p->examen_id}}</td>
                        <td><button type="button" class="btn btn-primary" wire:click="$emit('showAnswers',{{$p->id}})">
                            Editar respuestas
                          </button>
                          <button type="button" class="btn btn-danger" wire:click="$emit('deleteQ',{{$p->id}})">
                            Eliminar
                          </button>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <livewire:admin.answer-loader>

              <form action="{{route('admodtest/create')}}" method="post">
                @csrf
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="createModalLabel">Crear pregunta</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" name="ex_id" value="{{$examen}}">
                            <div class="mb-3">
                                <label for="InputDef" class="form-label">Definicion</label>
                                <input type="text" class="form-control" id="InputDef" name="descripcion">

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

</div>
