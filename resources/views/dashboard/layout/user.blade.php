<li class="nav-item dropdown text-white">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="navbar-text text-white me-2">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        @if($isAdmin)
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('users.index') }}">Cadastrar Usuário</a></li>
        @endif

    </ul>
</li>
