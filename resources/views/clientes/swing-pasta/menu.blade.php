@push('css')
    @vite(['resources/scss/app.scss', 'resources/scss/menu.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Swing pasta - menú en linea">
    
    <header>
        <x-cabecera>
            <x-slot name="fondoCabecera">
                <img src="{{asset('img/clientes/swing/swing-banner.jpg')}}" class="img-fondo" alt="">
            </x-slot>
            <x-slot name="logoEmpresa">
                <img src="{{ asset('img/clientes/swing/logo.png') }}" alt="">
            </x-slot>
            <x-slot name="tituloEmpresa">
                Swing Pasta
            </x-slot>
            <x-slot name="ubicacionEmpresa">
                Florida, pinos
            </x-slot>
        </x-cabecera>
    </header>

    <section>
       <div class="promociones container-fluid">
        <x-promo name="bntPromo">
            <x-slot name="btnPromo">
                <a>
                    <span>🔥</span> <span>Swing Date Spicy Edition</span>
                </a>
            </x-slot>
        </x-promo>
       </div>
    </section>
    <section class="filtro">
        <x-navfilter>
            <x-slot name="navFilter">
                <a href="/" class="active">
                    + Vendido
                </a>
                <a href="/" class="off">
                    Entradas
                </a>
            </x-slot>
        </x-navfilter>
    </section>

    <section class="contenedor-productos">
        <div class="container">
            <span>Lo más vendido</span>
            <x-producto name="producto">
                <x-slot name="tituloProducto">
                    Monroe
                </x-slot>
                <x-slot name="precioProducto">
                    $140
                </x-slot>
                <x-slot name="descripcionProducto">
                    Pasta salteada a la mantequilla con una mezcla de brócoli, calabaza italiana, pimiento rojo,
                    champiñones, ajo y especias. (270grs).
                </x-slot>
                <x-slot name="imgProducto">
                    <img src="{{ asset('img/clientes/swing/producto.png') }}" alt="">
                </x-slot>
            </x-producto>
            <x-producto name="producto">
                <x-slot name="tituloProducto">
                    Monroe
                </x-slot>
                <x-slot name="precioProducto">
                    $140
                </x-slot>
                <x-slot name="descripcionProducto">
                    Pasta salteada a la mantequilla con una mezcla de brócoli, calabaza italiana, pimiento rojo,
                    champiñones, ajo y especias. (270grs).
                </x-slot>
                <x-slot name="imgProducto">
                    <img src="{{ asset('img/clientes/swing/producto.png') }}" alt="">
                </x-slot>
            </x-producto>
        </div>
        </div>
</x-layouts.guest>
