<div>
    <form action="{{route('adcertif/upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
              Subir plantilla
            </div>
            <div class="card-body">
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="mod_id">
                        <option selected>Seleccione...</option>
                        @foreach ($modulos as $mod )
                        <option value="{{$mod->id}}">{{$mod->modulo}}</option>
                        @endforeach
                    </select>

                  </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Archivo</label>
                    <input class="form-control" type="file" id="formFile" name="plantilla" value="send">
                  </div>

                  <div class="mb-3">
                    <label for="InputVersion" class="form-label">Version</label>
                    <input type="text" class="form-control" id="InputVersion" name="version">
                        </div>

                  <button type="submit" class="btn btn-success">Subir</button>
            </div>
          </div>

    </form>
</div>
