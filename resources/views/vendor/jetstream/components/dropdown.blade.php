@props(['id'])
<li class="nav-item dropdown" id="{{$id}}">
    <a class="nav-link dropdown-toggle border border-dark rounded-3"  data-bs-toggle="dropdown" id="navbarDropdown{{$id}}" role="button" aria-expanded="false">{{$trigger}}</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{$id}}">
        {{$content}}
    </ul>
  </li>




