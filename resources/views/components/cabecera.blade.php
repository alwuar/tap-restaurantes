<div class="cabecera-menu">
    <div class="cabecera__seccionuno">
        <div class="fondo-cabecera">
            {{ $fondoCabecera ?? 'No disponible' }}
        </div>
        <div class="imagen-cabecera">
            {{ $logoEmpresa ?? 'No disponible' }}
        </div>
        <div class="titulo-cabecera">
           <div class="titular-empresa">
            <span class="titulo-empresa">{{ $tituloEmpresa ?? 'Sin título' }}</span>
            <span class="ubi-empresa">{{ $ubicacionEmpresa ?? 'Sin ubicación' }}</span>
           </div>
        </div>
    </div>
   
</div>
