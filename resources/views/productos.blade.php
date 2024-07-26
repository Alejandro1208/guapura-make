 <style>
     body {
         font-family: Arial, sans-serif;
         background-color: #f9f9f9;
         color: #333;
         margin: 0;
         padding: 0;
         overflow-x: hidden;
         font-family: "Josefin Sans";
     }

     .productos h2 {
         color: #363535;
         font-size: 60px;
     }

     .productos p {
         color: #545454;
         font-size: 20px;
     }

     .product-card {
         border: 1px solid #ddd;
         border-radius: 5px;
         overflow: hidden;
         background-color: #debdbb;
         transition: transform 0.3s;
     }

     .product-card:hover {
         transform: scale(1.05);
         cursor: pointer;
     }

     .product-image {
         width: 100%;
         height: 300px;
         overflow: hidden;
     }

     .product-image img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         transition: transform 0.3s;
     }

     .product-image img:hover {
         transform: scale(1.1);
     }

     .product-details {
         padding: 15px;
         background-color: #debdbb;
     }

     .product-details h5 {
         margin: 10px 0;
         color: #545454;
     }

     .product-details p {
         margin: 10px 0;
         color: #545454;
     }

     .product-details .btn {
         background-color: #debdbb;
         border: solid white;
         border-radius: 20px;
     }

     .product-details .btn:hover {
         background-color: #ba9e9d;
     }

     /* Modal styles */
     .modal-dialog {
         max-height: 50%;
     }

     .modal-body .carousel-item img {
         width: 100%;
         height: auto;
     }
     @media (max-width: 468px){

     }
 </style>

 <body>
     <div class="container productos mt-5">
         <h2 class="text-center">Nuestros Productos</h2>
         <p class="text-center">Reserva tu modelo</p>
         <div class="row">
             @php
                 $productos = [
                     (object) [
                         'nombre' => 'Producto 1',
                         'precio' => 100,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 2',
                         'precio' => 200,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 3',
                         'precio' => 300,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 4',
                         'precio' => 400,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 5',
                         'precio' => 500,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 6',
                         'precio' => 600,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 7',
                         'precio' => 700,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 8',
                         'precio' => 800,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 9',
                         'precio' => 900,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                     (object) [
                         'nombre' => 'Producto 10',
                         'precio' => 1000,
                         'imagenes' => ['producto1.png', 'producto2.png'],
                     ],
                 ];
             @endphp

             @foreach ($productos as $producto)
                 <div class="col-12 col-md-3 mb-4">
                     <div class="product-card" data-bs-toggle="modal" data-bs-target="#modal-{{ $loop->index }}">
                         <div class="product-image">
                             <img src="{{ asset('images/' . $producto->imagenes[0]) }}" alt="{{ $producto->nombre }}">
                         </div>
                         <div class="product-details text-center">
                             <h5>{{ $producto->nombre }}</h5>
                             <p>${{ $producto->precio }}</p>
                             <a href="https://wa.me/?text=Estoy interesado en el {{ $producto->nombre }}. ¿Podrías darme más información?"
                                 class="btn btn-primary" target="_blank">Reservar Producto</a>
                         </div>
                     </div>
                 </div>

                 <!-- Modal -->
                 <div class="modal fade" id="modal-{{ $loop->index }}" tabindex="-1"
                     aria-labelledby="modalLabel-{{ $loop->index }}" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="modalLabel-{{ $loop->index }}">{{ $producto->nombre }}
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <div id="carousel-{{ $loop->index }}" class="carousel slide">
                                     <div class="carousel-inner">
                                         @foreach ($producto->imagenes as $index => $imagen)
                                             <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                 <img src="{{ asset('images/' . $imagen) }}"
                                                     alt="{{ $producto->nombre }}">
                                             </div>
                                         @endforeach
                                     </div>
                                     <button class="carousel-control-prev" type="button"
                                         data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="visually-hidden">Previous</span>
                                     </button>
                                     <button class="carousel-control-next" type="button"
                                         data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="visually-hidden">Next</span>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </body>


