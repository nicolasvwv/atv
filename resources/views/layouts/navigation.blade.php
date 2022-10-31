<nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
            @include('components.application-logo')
    
    <div class="d-flex justify-content-end">
        <a href="" class="btn btn-outline-secondary dropdown-toggle roudend " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>
        🧡
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="dropdown-item" type="submit">Sair</button>
        </form></li>
          </ul>
    </div>
    </div>
</nav>
