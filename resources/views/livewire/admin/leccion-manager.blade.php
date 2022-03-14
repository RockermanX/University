<div>


        <div class="container-fluid">
            <div class="container-sm">

                <div class="card">
                    <div class="card-header">
                      Modificar leccion
                    </div>
                    <div class="card-body">
                        <form action="{{route('adleccion/edit')}}" method="POST">
                            @csrf

                            <input type="hidden" value="{{$data['id']}}" name="id_mod">
                            <input type="hidden" value="{{$lec}}" name="id_lec">
                            <div class="input-group">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" aria-label="First name" placeholder="{{$data['leccion']}}" class="form-control" name="leccion">

                              </div>
                              <div class="input-group">
                                <span class="input-group-text">Estado</span>
                                <select class="form-select" aria-label="Default select example" name="estado">
                                    <option value="1" selected>Activo</option>
                                    <option value="0">Inactivo</option>
                                    </select>
                              </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                              </div>
                        </form>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Modificar videos
                    </div>
                    <div class="card-body">
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
                                <th scope="col">Embed</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Opciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $vid )
                                <tr>
                                    <th scope="row">{{$vid->id}}</th>
                                    <td>{{$vid->video}}</td>
                                    @if ($vid->estado=='1')
                                    <td>Activo</td>
                                    @else
                                    <td>Inactivo</td>
                                    @endif
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModalVideo{{$vid->id}}">
                                        Modificar
                                      </button>
                                      <button type="button" class="btn btn-danger" wire:click="deleteVid({{$vid->id}})"  >
                                        Eliminar
                                      </button> </td>
                                      <form method="POST" action="{{route('adleccion/videoedit')}}">
                                        @csrf
                                        <div class="modal fade" id="editModalVideo{{$vid->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$vid->id}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="editModalLabel{{$vid->id}}">Modificar Video</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="lec_id" value="{{$lec}}">
                                                    <input type="hidden" name="vid_id" value="{{$vid->id}}">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Embed</span>
                                                        <input type="text" aria-label="First name" class="form-control" name="embed">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Estado</span>
                                                        <select class="form-select" aria-label="Default select example" name="estado">
                                                            <option value="1" selected>Activo</option>
                                                            <option value="0">Inactivo</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </form>

                                  </tr>
                                @endforeach

                            </tbody>
                          </table>

                          <form action="{{route('adleccion/videocreate')}}" method="post">
                              @csrf
                            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="createModalLabel">Crear Video</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <input type="hidden" name="lec_id" value="{{$lec}}">

                                        <div class="mb-3">
                                            <label for="InputEmbed" class="form-label">Embed</label>
                                            <input type="text" class="form-control" id="InputEmbed" name="embed">
                                          </div>

                                          <div class="mb-3">
                                            <select class="form-select" aria-label="Default select example" name="estado">
                                                <option value="1" selected>Activado</option>
                                                <option value="0">Desactivado</option>
                                              </select>
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

        </div>


</div>
