{{--<li class="nav-item dropdown text-white">--}}
{{--    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--        <span class="navbar-text text-white me-2">{{ Auth::user()->name }}</span>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu">--}}
{{--        <li><a class="dropdown-item" href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a></li>--}}
{{--        <li><a class="dropdown-item" href="#">Ver Permissões</a></li>--}}
{{--        @if($isAdmin)--}}
{{--            <li><hr class="dropdown-divider"></li>--}}
{{--            <li><a class="dropdown-item" href="{{ route('users.index') }}">Cadastrar Usuário</a></li>--}}
{{--        @endif--}}

{{--    </ul>--}}
{{--</li>--}}

<li class="">
    <details>
        <summary>{{ Auth::user()->name }}</summary>
        <ul class="p-2">
            <li><a class="" href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a></li>
            <li><a class="" href="#">Ver Permissões</a></li>
            @if ($isAdmin)
                <li class="disabled"></li>
                <li><a class="" href="{{ route('users.index') }}">Cadastrar Usuário</a></li>
            @endif
        </ul>
    </details>
</li>
