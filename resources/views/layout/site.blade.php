@include('layout._includes.topo')

<div>
    <div>
        <h3>@yield('titulo')</h3>
    </div>

    <div>
        @yield('conteudo')
    </div>
</div>

@include('layout._includes.rodape')
