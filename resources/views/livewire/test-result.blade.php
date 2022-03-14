<div>
   @isset($results)
    <p>Resultados recibidos</p>
   @else
   <p>Resultados no recibidos</p>
   @endif
    @if ($approved==true)
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Aprobado</div>
        <div class="card-body">

          <p class="card-text">Has aprobado el examen</p>
        </div>
      </div>
    @else
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Desaprobado</div>
        <div class="card-body">

          <p class="card-text">Has desaprobado el examen.</p>
        </div>
      </div>
    @endif
</div>
