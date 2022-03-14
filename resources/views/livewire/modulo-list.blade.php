
<style>
    .btn {
        margin-top: 2px;
        width: 150px;
    }

    .accordion {
        margin-top: 2px;
        width: 180px;
    }

</style>

<div>
    <ul class="nav flex-column" id="nav_accordion">
        @foreach ($modulos as $mod )
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item{{$mod->id}}" href="#">
              <i class="bx bxs-folder nav_icon"></i>
              <span class="nav_name nav-left-name">{{$mod->modulo}}</span>
              <i class="bi small bi-caret-down-fill float-end"></i>
            </a>
            <ul id="menu_item{{$mod->id}}" class="submenu collapse" data-bs-parent="#nav_accordion">
                @foreach ($mod->leccion as $lec )
                <li>
                    <a href="{{route('modulos',encrypt($lec->id))}}" class="nav_link">
                      <i class="bi bi-check-circle-fill nav_icon"></i>
                      <span class="nav_name nav-left-name">{{$lec->leccion}}</span>
                    </a>
                  </li>
                @endforeach

            @isset($mod->examen)
            <li>
                <a href="{{route('modulos',encrypt("_".$mod->id))}}" class="nav_link">
                  <i class="bx bxs-bookmark nav_icon"></i>
                  <span class="nav_name nav-left-name">Examen</span>
                </a>
              </li>
            @endisset
              
            </ul>
          </li>
        @endforeach



      </ul>
</div>
{{--


<div>

  @foreach ($modulos as $mod)

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$mod->id}}" aria-expanded="true" aria-controls="collapseOne">
                {{$mod->modulo}}
            </button>
          </h2>
          <div id="collapse{{$mod->id}}" class="accordion-collapsed collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!--          Modulo de seleccion de lecciones            -->

                @foreach ( $mod->leccion as $lec )

                <button type="button" class="btn btn-outline-secondary btn-lg "  ><a  href="{{route('modulos',encrypt($lec->id))}}" wire:click="emTitle({{$lec->leccion}})">{{$lec->leccion}}</a></button>

                @endforeach
                <button type="button" class="btn btn-outline-secondary btn-lg "  ><a  href="{{route('modulos',encrypt("_".$mod->id))}}" >Evaluacion</a></button>
            </div>
          </div>
        </div>
    </div>
  @endforeach

</div>  --}}
