@push('css')
    @vite(['resources/scss/app.scss', 'resources/scss/index.scss',  'resources/js/app.js'])
@endpush
<x-layouts.guest title="{{$tituloSeo ?? 'Menú digital'}}">
    <x-nav></x-nav>
    
    <header class="header_index">
        <div class="container">
            <h2>El menú digital que aumenta tu ticket promedio</h2>
        <p>Crea una experiencia moderna para tus clientes con un menú digital rápido, claro y profesional. Tú envías tu menú, nosotros lo montamos y lo dejamos funcionando.</p>
        <div class="btn-index">
            <a href="" class="btn btn-primary">Crear mi menú digital</a>
            {{-- <a href="" class="btn btn-outline-dark">Ver ejemplos reales</a> --}}
        </div>
        </div>
    </header>
</x-layouts.guest>