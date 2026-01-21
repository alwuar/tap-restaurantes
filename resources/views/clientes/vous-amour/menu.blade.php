@push('css')
    @vite(['resources/scss/app.scss', 'resources/scss/menu-sf.scss','resources/js/app.js'])
@endpush
<x-layouts.guest-menu title="Vous Amour - menú en linea">
        @push('modal')
            <x-modal-promos name="promoModal">
                <x-slot name="promoModal">
                    <div class="text-center">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1189538700047535%2F&show_text=true&width=267&t=0" width="auto" height="591" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </x-slot>
            </x-modal-promos>
        @endpush
    <header>
        <x-cabecera>
            <x-slot name="fondoCabecera">
                <img src="{{asset('img/clientes/vous-amour/vous-amour-fondo.webp')}}" class="img-fondo" alt="">
            </x-slot>
            <x-slot name="logoEmpresa">
                <img src="{{ asset('img/clientes/vous-amour/vous-amour-logo.png') }}" alt="">
            </x-slot>
            <x-slot name="tituloEmpresa">
                Vous Amour
            </x-slot>
            <x-slot name="ubicacionEmpresa">
                Café, brunch, desayunos y spots con mucho amor <br> y un toque Parisino.
                
            </x-slot>
        </x-cabecera>
    </header>

    <section>
       <div class="promociones container-fluid">
        <x-promo name="bntPromo">
            <x-slot name="btnPromo">
                <small>10% OFF en el total de tu cuenta</small>
            </x-slot>
        </x-promo>
       </div>
    </section>
    

    <section class="contenedor-productos">
        <div class="container">

            <section class="recomendaciones">
                <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Recomendaciones de la semana 🏅 
                        
                        </span> 
                </span>
                <div class="card-yomy">
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Bowl de frutos rojos
                        </x-slot>
                        <x-slot name="precioProducto">
                            $133
                        </x-slot>
                        <x-slot name="descripcionProducto">
                            Pudín de avena, chia y leche de coco terminado con una mezcla de frutos rojos frescos y coco tostado.
                        </x-slot>
                    </x-producto-sf>
                </div>
            </div>
            </section>

            {{-- data target --}}
           <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Bowls & Toast 
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample">
                <div class="card card-body">
                   <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Bowl de frutos rojos
                        </x-slot>
                        <x-slot name="precioProducto">
                            $133
                        </x-slot>
                        <x-slot name="descripcionProducto">
                            Pudín de avena, chia y leche de coco terminado con una mezcla de frutos rojos frescos y coco tostado.
                        </x-slot>
                    </x-producto-sf>
                    
                    <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Salmonete toast
                </x-slot>
                <x-slot name="precioProducto">
                    $180
                </x-slot>
                <x-slot name="descripcionProducto">
                   Pan campesino tostado, aderezo ravigot con pepino, laminas de salmón ahumado y brotes de temporada.
                </x-slot>
            </x-producto-sf>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Avocat & Huevo toast
                </x-slot>
                <x-slot name="precioProducto">
                    $145
                </x-slot>
                <x-slot name="descripcionProducto">
                   Nuestro pan campesino tostado, aderezado con puré de aguacate, rabano, sandía, cebolla y brotes de temporada, coronado con un cremoso huevo poche.
                </x-slot>
            </x-producto-sf>
                </div>
            </div>
            {{-- end data target --}}

            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Pancakes & Más
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample1">
                <div class="card card-body">
                   <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                   Fluffy Pancake
                </x-slot>
                <x-slot name="precioProducto">
                    $165
                </x-slot>
                <x-slot name="descripcionProducto">
                    Nuestra mezcla especial para pancakes, decorado con frutos rojos y crema batida
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Pancakes du Chocolat
                </x-slot>
                <x-slot name="precioProducto">
                    $190
                </x-slot>
                <x-slot name="descripcionProducto">
                    Tres piezas de deliciosos pancakes de cocoa, bañados con ganache de chocolate semiamargo, frutos rojos de temporada, azucar glass y crema batida.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Pancakes rose
                </x-slot>
                <x-slot name="precioProducto">
                    $220
                </x-slot>
                <x-slot name="descripcionProducto">
                    Tres esponjosos pancakes acompañados de frutos rojos y bañada con una cascada de chocolate rosa.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    French toast Vous Amour
                </x-slot>
                <x-slot name="precioProducto">
                    $175
                </x-slot>
                <x-slot name="descripcionProducto">
                    Esponjoso brioche al sartén, bañado con nuestra mezcal especial para tostada, terminado con nuestra compota casera de frutos rojos y moras frescas
                </x-slot>
            </x-producto>
                </div>
            </div>

            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Ensaladas
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample3">
                <div class="card card-body">
                 <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                   Salade Au Fromage Brie
                </x-slot>
                <x-slot name="precioProducto">
                    $210
                </x-slot>
                <x-slot name="descripcionProducto">
                    Mezcla de lechugas frescas, empanadas ligeramente hojaldradas de queso brie, aderezo balsámico.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Ensalada de peras al vino
                </x-slot>
                <x-slot name="precioProducto">
                    $163
                </x-slot>
                <x-slot name="descripcionProducto">
                    Mezcla de lechugas frescas, peras cocinadas en vino tinto especiado, queso de cabra y nuez caramelizada.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Ensalada de cítricos y camarones
                </x-slot>
                <x-slot name="precioProducto">
                    $240
                </x-slot>
                <x-slot name="descripcionProducto">
                    Camarones salteados en mantequilla sobre una cama de mezcla de lechugas, cítricos de temporada y una vinagreta tibia de vino blanco y hierbas.
                </x-slot>
            </x-producto>
                </div>
            </div>
            
            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Sandwiches & baguettes
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample4">
                <div class="card card-body">
                     <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                   Croque Madame
                </x-slot>
                <x-slot name="precioProducto">
                    $216
                </x-slot>
                <x-slot name="descripcionProducto">
                    Pan brioche bañado en salsa bechamel de la casa, jamón de pavo, mezcla de quesos y huevo frito.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Croque Monsieur
                </x-slot>
                <x-slot name="precioProducto">
                    $186
                </x-slot>
                <x-slot name="descripcionProducto">
                    Pan brioche, salsa bechamel aromatizada con hierbas y vegetales, jamón de pavo y mezcla de quesos
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Bagel de salmón
                </x-slot>
                <x-slot name="precioProducto">
                    $250
                </x-slot>
                <x-slot name="descripcionProducto">
                    Pan baguel con salmón ahumado, cebolla, tomate y aderezo ravigote acompañado de ensalada de la casa.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Croque Vous
                </x-slot>
                <x-slot name="precioProducto">
                    $233
                </x-slot>
                <x-slot name="descripcionProducto">
                    Una infusión entre dos clásicos BLT y Croque Monsieur, mezcla de lechugas, tomate fresco, crujiente tocino, mezcla de queso y queso de cabra, todo bañado en salsa bechamel de la casa.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
                <x-slot name="tituloProducto">
                    Baguette Aux Trois fromage
                </x-slot>
                <x-slot name="precioProducto">
                    $185
                </x-slot>
                <x-slot name="descripcionProducto">
                    Crujiente Baguette, aderezada con salsa bechamel de la casa, queso gruyere, queso de cabra, monterrey jack y gouda, sazonado con un toque de pimienta, tomate y lechuga.
                </x-slot>
            </x-producto>
            <x-producto-sf name="producto">
            <x-slot name="tituloProducto">
                Baguette De Boeuf
            </x-slot>
            <x-slot name="precioProducto">
                $237
            </x-slot>
            <x-slot name="descripcionProducto">
                Jugosa arracherra con champiñones, bañada en una demi glace, con mix de quesos, tomate frescos, lechuga y mostaza antigua.
            </x-slot>
        </x-producto>

                </div>
            </div>
            
             <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Benedictinos
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample5">
                <div class="card card-body">
                    <x-producto-sf name="producto">
                    <x-slot name="tituloProducto">
                        Benedictinos
                    </x-slot>
                    <x-slot name="precioProducto">
                        $185
                    </x-slot>
                    <x-slot name="descripcionProducto">
                        English Muffin hecho en casa, con huevo poche, lomo canadiense, cremosa salsa holandesa, servido con mezcla de lechugas.
                    </x-slot>
                </x-producto>
                <x-producto-sf name="producto">
                    <x-slot name="tituloProducto">
                        Benedictinos Rose
                    </x-slot>
                    <x-slot name="precioProducto">
                        $185
                    </x-slot>
                    <x-slot name="descripcionProducto">
                        English Muffin hecho en casa, con huevo poche, lomo canadiense, bañados en una salsa holandesa de betabel, servido con mezcla de lechugas.
                    </x-slot>
                </x-producto>
                <x-producto-sf name="producto">
                    <x-slot name="tituloProducto">
                        Benedictinos Tocino
                    </x-slot>
                    <x-slot name="precioProducto">
                        $175
                    </x-slot>
                    <x-slot name="descripcionProducto">
                        English Muffin hecho en casa, con huevo poche, crujiente tocino, cremosa salsa holandesa, servido con mezcla de lechugas.
                    </x-slot>
                </x-producto>

                </div>
            </div>
           

            {{--  --}}
            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Huevos y Quiche
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample6">
                <div class="card card-body">
                    <x-producto-sf name="producto">
                    <x-slot name="tituloProducto">
                        Omelette Amour
                    </x-slot>
                    <x-slot name="precioProducto">
                        $185
                    </x-slot>
                    <x-slot name="descripcionProducto">
                    Esponjoso omelette, relleno de queso de cabra, nuez tostada, tocino, servido con papas confitadas y ensalada de mezcla de lechugas.
                    </x-slot>
                </x-producto>
                <x-producto-sf name="producto">
                    <x-slot name="tituloProducto">
                        Quiche Lorraine
                    </x-slot>
                    <x-slot name="precioProducto">
                        $125
                    </x-slot>
                    <x-slot name="descripcionProducto">
                    Nada como un clásico francés, masa de tarta salada, rellena de una mezcla de huevo queso de cabra, jamón ahumado, acompañado de mezcla de lechugas y vinagreta balsámica.
                    </x-slot>
                </x-producto>

                </div>
            </div>
            {{--  --}}
            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Plat principal et plus
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample7">
                <div class="card card-body">
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Hamburger au bacon
                        </x-slot>
                        <x-slot name="precioProducto">
                            $190
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Jugosa carne de res montada sobre un pan brioche, mayonesa, mezcla de lechugas, tomate y por supuesto tocino crujiente y cremoso queso de cabra.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Hamburger vous amour
                        </x-slot>
                        <x-slot name="precioProducto">
                            $233
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Jugosa carne de la casa, acompañada de arrachera, tomate, lechuga, queso gruyere y cebolla frita.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Croissant vous amour
                        </x-slot>
                        <x-slot name="precioProducto">
                            $233
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Un clásico croissant relleno de queso brie, mix de quesos, pechuga ahumada de pavo, lechuga, aderezado con una mermelada de frutos rojos y chipotle.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Chilaquiles rojos
                        </x-slot>
                        <x-slot name="precioProducto">
                            $205
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Tortilla de maiz frita, bañada en nuestra salsa roja, acompañados de arrachera, huevo, queso, crema, brotes, cebolla morada.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Chilaquiles verdes
                        </x-slot>
                        <x-slot name="precioProducto">
                            $185
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Totopos bañados en una salsa verde clásica, mezcal de quesos, cebolla morara, crema y con la proteína de tu elección, huevo o pollo a la plancha.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Pasta Vous Amour
                        </x-slot>
                        <x-slot name="precioProducto">
                            $187
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Pasta penne, bañada con una salsa Alfredo de betabel con camarrones salteados con un toque ahumado.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Pasta creme xcatik
                        </x-slot>
                        <x-slot name="precioProducto">
                            $187
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Deliciosa crema de chiles, acompañada de hongos salteados, pollo a la plancha y brotes.
                        </x-slot>
                    </x-producto>

                    <span><b>Postres</b></span>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Tarte Fraisier
                        </x-slot>
                        <x-slot name="precioProducto">
                            $152
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Cremosa tarta rellena de un mousseline de vainilla, biscocho bañado en jarabe de te rooibos, terminado con fresas frescas y pistache.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Tarte fraisier
                        </x-slot>
                        <x-slot name="precioProducto">
                            $135
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Tarta de crema de limón Eureka, merengue flameado y rodajas de limón caramelizado.
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Creme Brulee
                        </x-slot>
                        <x-slot name="precioProducto">
                            $110
                        </x-slot>
                        <x-slot name="descripcionProducto">
                        Natilla de vainilla, cubierta de una capa de caramelo.
                        </x-slot>
                    </x-producto>

                </div>
            </div>

            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Panadería <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample8">
                <div class="card card-body">
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Pan estilo francés de la casa
                        </x-slot>
                        <x-slot name="precioProducto">
                            $75
                        </x-slot>
                    </x-producto>
                </div>
            </div>
            <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
                       <span>Bebidas</span>
                       <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                       
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample10">
                <div class="card card-body">
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Café americano refill
                        </x-slot>
                        <x-slot name="precioProducto">
                            $59
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Café americano
                        </x-slot>
                        <x-slot name="precioProducto">
                            $49
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Café descafeinado
                        </x-slot>
                        <x-slot name="precioProducto">
                            $49
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Espresso
                        </x-slot>
                        <x-slot name="precioProducto">
                            $50
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Espresso doble
                        </x-slot>
                        <x-slot name="precioProducto">
                            $70
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Espresso cortado
                        </x-slot>
                        <x-slot name="precioProducto">
                            $60
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Latte
                        </x-slot>
                        <x-slot name="precioProducto">
                            $60
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Iced Latte 
                        </x-slot>
                        <x-slot name="precioProducto">
                            $65
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Iced Pinked Latte 
                        </x-slot>
                        <x-slot name="precioProducto">
                            $70
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Chai latte
                        </x-slot>
                        <x-slot name="precioProducto">
                            $80
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Capuccino
                        </x-slot>
                        <x-slot name="precioProducto">
                            $65
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Saborizantes Extras
                        </x-slot>
                        <x-slot name="precioProducto">
                            $25
                        </x-slot>
                        <x-slot name="descripcionProducto">
                            Avellana / Vainilla francesa / Convierte tu bebida en fría + $10 / shot de leche $20
                        </x-slot>
                    </x-producto>

                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Frapuccino
                        </x-slot>
                        <x-slot name="precioProducto">
                            $75
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Matcha Latte
                        </x-slot>
                        <x-slot name="precioProducto">
                            $90
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Taro Latte
                        </x-slot>
                        <x-slot name="precioProducto">
                            $90
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Frappe Oreo
                        </x-slot>
                        <x-slot name="precioProducto">
                            $95
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Moka frappe
                        </x-slot>
                        <x-slot name="precioProducto">
                            $85
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Moka
                        </x-slot>
                        <x-slot name="precioProducto">
                            $80
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Chocolate
                        </x-slot>
                        <x-slot name="precioProducto">
                            $75
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Prensa francesa
                        </x-slot>
                        <x-slot name="precioProducto">
                            $90
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Cold Brew
                        </x-slot>
                        <x-slot name="precioProducto">
                            $90
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Coffe spritzer
                        </x-slot>
                        <x-slot name="precioProducto">
                            $95
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Jugo Naranja
                        </x-slot>
                        <x-slot name="precioProducto">
                            $50
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Jugo Verde
                        </x-slot>
                        <x-slot name="precioProducto">
                            $60
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Limonada fresa y Chia
                        </x-slot>
                        <x-slot name="precioProducto">
                            $75
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Limonada
                        </x-slot>
                        <x-slot name="precioProducto">
                            $55
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Té Sencha
                        </x-slot>
                        <x-slot name="precioProducto">
                            $55
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Tissana Fresa y Kiwi
                        </x-slot>
                        <x-slot name="precioProducto">
                            $55
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Tissana Jenjibre y Mandarina
                        </x-slot>
                        <x-slot name="precioProducto">
                            $55
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Coca cola
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Coca cola Light
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Coca cola sin azúcar
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Mundet
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Sprite
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Agua mineral
                        </x-slot>
                        <x-slot name="precioProducto">
                            $45
                        </x-slot>
                    </x-producto>
                    <x-producto-sf name="producto">
                        <x-slot name="tituloProducto">
                            Agua embotellada
                        </x-slot>
                        <x-slot name="precioProducto">
                            $35
                        </x-slot>
                    </x-producto>
                </div>
            </div>
        <div class="mb-3">
                <span class="categoria" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Malteadas
                        <span><img src="{{asset('img/flecha.svg')}}" width="10" alt="">
                        </span> 
                </span>
            </div>
            <div class="collapse mb-3" id="collapseExample9">
                <div class="card card-body">
                     <x-producto-sf name="producto">
            <x-slot name="tituloProducto">
                Malteada de fresa
            </x-slot>
            <x-slot name="precioProducto">
                $80
            </x-slot>
        </x-producto>
        <x-producto-sf name="producto">
            <x-slot name="tituloProducto">
                Malteada de chocolate
            </x-slot>
            <x-slot name="precioProducto">
                $80
            </x-slot>
        </x-producto>
        <x-producto-sf name="producto">
            <x-slot name="tituloProducto">
                Malteada de vainilla
            </x-slot>
            <x-slot name="precioProducto">
                $80
            </x-slot>
        </x-producto>
                </div>
        </div>
        </div>
    </section>
        @push('js')
            <script>
                $(document).ready(function() {
                $('#promoModal').modal('show');
                 });

            </script>

        @endpush
        

        
</x-layouts.guest>
