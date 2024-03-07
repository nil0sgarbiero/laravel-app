<div class="mx-auto flex items-center justify-center hover:bg-gray-500 rounded-box">
    <div class="group relative cursor-pointer">

        <div class="flex w-full items-center justify-between space-x-15 px-14">
            <a class="menu-hover my-2 py-3 text-white font-medium text-black lg:mx-8" onClick="" href="{{ route('home') }}">
                Principal
            </a>
        </div>
    </div>
</div>

<div class="mx-auto flex items-center justify-center hover:bg-gray-500 rounded-box">
    <div class="group relative cursor-pointer">

        <div class="flex w-full items-center justify-between space-x-15 px-14">
            <a class="menu-hover my-2 py-3 text-white font-medium text-black lg:mx-8" onClick="">
                VDP
            </a>
        </div>

        <div class="invisible absolute z-60 flex w-full flex-col bg-gray-300 py-3 px-5 text-gray-500 shadow-xl group-hover:visible rounded-box">
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Orçamento</a>
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Pedido</a>
            @if ($isAdmin)
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto"><hr></a>
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Copiar Pedido</a>
            @endif
        </div>
    </div>
</div>

<div class="mx-auto flex items-center justify-center hover:bg-gray-500 rounded-box">
    <div class="group relative cursor-pointer">

        <div class="flex w-full items-center justify-between space-x-15 px-14">
            <a class="menu-hover my-2 py-3 text-white font-medium text-black lg:mx-8" onClick="">
                PCP
            </a>
        </div>

        <div class="invisible absolute z-60 flex w-full flex-col bg-gray-300 py-3 px-5 text-gray-500 shadow-xl group-hover:visible rounded-box">
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Ordem de Produção</a>
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Ordem de Fabricação</a>
            @if ($isAdmin)
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto"><hr></a>
                <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="#">Criar OP</a>
            @endif
        </div>
    </div>
</div>

<div class="mx-auto flex items-center justify-center hover:bg-gray-500 rounded-box">
    <div class="group relative cursor-pointer">

        <div class="flex w-full items-center justify-between space-x-15 px-14">
            <a class="menu-hover my-2 py-3 text-white font-medium text-black lg:mx-8" onClick="">
                MAM
            </a>
        </div>

        <div class="invisible absolute z-60 flex w-full flex-col bg-gray-300 py-3 px-5 text-gray-500 shadow-xl group-hover:visible rounded-box">
            <a class="my-1 block w-full border-gray-100 py-1 font-semibold hover:text-white md:mx-auto" href="{{ route('mam') }}">Cadastro Item</a>
        </div>
    </div>
</div>
{{--<li class="mx-6 flex items-center justify-center group cursor-pointer hover:bg-slate-500">--}}
{{--                <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                   aria-expanded="true">--}}
{{--                    <span class="">VDP</span>--}}
{{--                </a>--}}
{{--        <summary>VDP</summary>--}}
{{--        <ul class="menu text-white xl:menu-horizontal lg:min-w-max rounded-box">--}}
{{--            <li class="invisible absolute flex w-full flex-col  py-1 px-4  group-hover:visible"><a class="" href="#">Orçamento</a></li>--}}
{{--            <li><a class="" href="#">Pedido</a></li>--}}
{{--                @if ($isAdmin)--}}
{{--                <li class="disabled"></li>--}}
{{--            <li><a class="" href="#">Copiar Pedido</a></li>--}}
{{--                @endif--}}
{{--        </ul>--}}
{{--</li>--}}
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
