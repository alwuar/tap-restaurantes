<li class="producto">
    <div class="producto__info">
        <span>{{$tituloProducto ?? 'Título no disponible'}}</span>
        <span>{{$precioProducto ?? 'Precio no disponible'}}</span>
        <span>{{$descripcionProducto ?? 'Descripción no disponible'}}</span>
    </div>
    <div class="producto__img">
        {{$imgProducto ?? 'Imagen no disponible'}}
    </div>
</li>
