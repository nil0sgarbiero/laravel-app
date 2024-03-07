<li class="mx-auto">
    <a class="" href="{{ route('home') }}">Principal</a>
</li>
<li class="mx-auto">
    <details>
{{--                <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                   aria-expanded="true">--}}
{{--                    <span class="">VDP</span>--}}
{{--                </a>--}}
        <summary>VDP</summary>
        <ul class="p-2 mx-auto">
            <li><a class="" href="#">Orçamento</a></li>
            <li><a class="" href="#">Pedido</a></li>
                @if ($isAdmin)
                <li class="disabled"></li>
            <li><a class="" href="#">Copiar Pedido</a></li>
                @endif
        </ul>
    </details>
</li>
{{--<li class="nav-item dropdown px-2">--}}
{{--    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--        aria-expanded="true">--}}
{{--        <span class="navbar-text text-white me-2">VDP</span>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu">--}}
{{--        <li><a class="dropdown-item" href="#">Orçamento</a></li>--}}
{{--        <li><a class="dropdown-item" href="#">Pedido</a></li>--}}
{{--        --}}{{--    @if ($isAdmin) --}}
{{--        <li>--}}
{{--            <hr class="dropdown-divider">--}}
{{--        </li>--}}
{{--        <li><a class="dropdown-item" href="#">Copiar Pedido</a></li>--}}
{{--        --}}{{--    @endif --}}
{{--    </ul>--}}
{{--</li>--}}
{{--<li class="nav-item dropdown px-2">--}}
{{--    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--        aria-expanded="true">--}}
{{--        <span class="navbar-text text-white me-2">PCP</span>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu">--}}
{{--        <li><a class="dropdown-item" href="#">Ordem de Produção</a></li>--}}
{{--        <li><a class="dropdown-item" href="#">Ordem de Fabricação</a></li>--}}
{{--        --}}{{--    @if ($isAdmin) --}}
{{--        <li>--}}
{{--            <hr class="dropdown-divider">--}}
{{--        </li>--}}
{{--        <li><a class="dropdown-item" href="#">Criar OP</a></li>--}}
{{--        --}}{{--    @endif --}}
{{--    </ul>--}}
{{--</li>--}}
<li class="mx-auto">
    <details>
        <summary>PCP</summary>
        <ul class="p-2 mx-auto">
            <li><a class="" href="#">Ordem de Produção</a></li>
            <li><a class="" href="#">Ordem de Fabricação</a></li>
            @if ($isAdmin)
                <li class="disabled"></li>
                <li><a class="" href="#">Criar OP</a></li>
            @endif
        </ul>
    </details>
</li>
<li class="mx-auto">
    <details>
        <summary>MAN</summary>
        <ul class="p-2 mx-auto">
            <li><a class="" href="{{ route('mam') }}">Cadastro Item</a></li>
        </ul>
    </details>
</li>


{{--<li class="nav-item dropdown px-2">--}}
{{--    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--        aria-expanded="true">--}}
{{--        <span class="navbar-text text-white me-2">MAN</span>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu">--}}
{{--        <li><a class="dropdown-item" href="{{ route('mam') }}">Cadastro Item</a></li>--}}
{{--    </ul>--}}
{{--</li>--}}

{{--<li class="">--}}
{{--    <a class="" href="{{ route('home') }}">Principal</a>--}}
{{--</li>--}}
{{--<li class="">--}}
{{--    <details>--}}
{{--        --}}{{--        <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--        --}}{{--           aria-expanded="true">--}}
{{--        --}}{{--            <span class="">VDP</span>--}}
{{--        --}}{{--        </a>--}}
{{--        <summary>VDP</summary>--}}
{{--        <ul class="p-2">--}}
{{--            <li><a class="" href="#">Orçamento</a></li>--}}
{{--            <li><a class="" href="#">Pedido</a></li>--}}
{{--            --}}{{--    @if ($isAdmin) --}}
{{--            <li>--}}
{{--                <hr class="">--}}
{{--            </li>--}}
{{--            <li><a class="" href="#">Copiar Pedido</a></li>--}}
{{--            --}}{{--    @endif --}}
{{--        </ul>--}}
{{--    </details>--}}
{{--</li>--}}
{{--<li class="">--}}
{{--    <a class="" href="#">PCP</a>--}}
{{--</li>--}}
{{--<li class="">--}}
{{--    <details>--}}
{{--        --}}{{--        <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--        --}}{{--           aria-expanded="true">--}}
{{--        --}}{{--            <span class="">VDP</span>--}}
{{--        --}}{{--        </a>--}}
{{--        <summary>MAN</summary>--}}
{{--        <ul class="p-2">--}}
{{--            <li><a class="" href="#">Copiar Item</a></li>--}}
{{--            <li>--}}
{{--                <hr class="">--}}
{{--            </li>--}}
{{--            <li><a class="" href="#">Incluir Item</a></li>--}}
{{--            --}}{{--    @endif --}}
{{--        </ul>--}}
{{--    </details>--}}
{{--</li>--}}
