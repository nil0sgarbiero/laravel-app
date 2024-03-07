<li class="">
    <a class="" href="{{ route('home') }}">Principal</a>
</li>
<li class="">
    <details>
{{--        <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--           aria-expanded="true">--}}
{{--            <span class="">VDP</span>--}}
{{--        </a>--}}
        <summary>VDP</summary>
        <ul class="p-2">
            <li><a class="" href="#">Orçamento</a></li>
            <li><a class="" href="#">Pedido</a></li>
            {{--    @if ($isAdmin) --}}
            <li>
                <hr class="">
            </li>
            <li><a class="" href="#">Copiar Pedido</a></li>
            {{--    @endif --}}
        </ul>
    </details>
</li>
<li class="">
    <a class="" href="#">PCP</a>
</li>
<li class="">
    <details>
        {{--        <a class="" href="#" role="button" data-bs-toggle="dropdown"--}}
        {{--           aria-expanded="true">--}}
        {{--            <span class="">VDP</span>--}}
        {{--        </a>--}}
        <summary>MAN</summary>
        <ul class="p-2">
            <li><a class="" href="#">Copiar Item</a></li>
            <li>
                <hr class="">
            </li>
            <li><a class="" href="#">Incluir Item</a></li>
            {{--    @endif --}}
        </ul>
    </details>
</li>
