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

{{--<li class="">--}}
{{--    <details>--}}
{{--        <summary>{{ Auth::user()->name }}</summary>--}}
{{--        <ul class="p-2">--}}
{{--            <li><a class="" href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a></li>--}}
{{--            <li><a class="" href="#">Ver Permissões</a></li>--}}
{{--            @if ($isAdmin)--}}
{{--                <li class="disabled"></li>--}}
{{--                <li><a class="" href="{{ route('users.index') }}">Cadastrar Usuário</a></li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </details>--}}
{{--</li>--}}
<div class="mx-auto flex items-center justify-center hover:bg-gray-500 rounded-box">
    <div class="group relative cursor-pointer">

        <div class="flex w-full items-center justify-between space-x-15 px-6">
            <a class="menu-hover my-2 py-3 text-white font-medium text-black lg:mx-8" onClick="">
                {{ Auth::user()->name }}
            </a>
        </div>

        <div class="invisible absolute z-60 flex w-full flex-col bg-gray-300 py-3 px-5 text-gray-500 shadow-xl group-hover:visible rounded-box">
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto"
               href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a>
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Ver Permissões</a>
            @if ($isAdmin)
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto"><hr></a>
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="{{ route('users.index') }}">Cadastrar Usuário</a>
            @endif
        </div>
    </div>
</div>
