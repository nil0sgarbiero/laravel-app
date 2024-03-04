<li class="nav-item">
    <a class="nav-link text-white" href="{{ route('home') }}">Principal</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="true">
        <span class="navbar-text text-white me-2">VDP</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Orçamento</a></li>
        <li><a class="dropdown-item" href="#">Pedido</a></li>
        {{--    @if ($isAdmin) --}}
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Copiar Pedido</a></li>
        {{--    @endif --}}
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link text-white" href="#">PCP</a>
</li>
<li class="nav-item">
    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="true">
        <span class="navbar-text text-white me-2">MAN</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cadastro de Item</a></li>
    </ul>
</li>
