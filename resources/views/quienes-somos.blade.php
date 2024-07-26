    <style>
        .container {
            margin-top: 5rem;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .left-column {
            flex: 0 0 35%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;        
        }
        .left-column h3{
            font-size: 50px
        }
        .left-column p{
            font-size: 20px
        }

        .right-column {
            flex: 0 0 65%;
            padding: 15px;
        }

        .right-column img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .right-column img:hover {
            transform: scale(1.05);
        }

        .right-column .image-container {
            display: flex;
            gap: 15px;
        }

        .right-column .image-container .image {
            flex: 1;
            height: 450px; /* Ajusta la altura según sea necesario */
            overflow: hidden;
            border-radius: 20px;
        }
        .image-somos img{
            margin-top: 20px;
            border-radius: 35px;
            height: 300px;
        }
        .text{
            text-align: center;
            margin-top: 40px;
        }
        .text h4{
            font-size: 40px;
        }
        @media (max-width: 468px){
            .container {
            margin-top: 2rem;
        }
            .left-column {
            flex: 0 0 100%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;        
        }
        .right-column {
            flex: 0 0 100%;
            padding: 15px;
        }
        .image-somos img{
            margin-top: 0px;
            border-radius: 35px;
            height: 300px;
        }
        .right-column .image-container .image {
            flex: 1;
            height: 200px; /* Ajusta la altura según sea necesario */
            overflow: hidden;
            border-radius: 20px;
        }
        }
    </style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 left-column">
                <h3>Quiénes Somos</h3>
                <p>
                    Aquí va el texto descriptivo sobre quiénes somos. Puedes incluir información sobre la misión, visión y valores de tu empresa, equipo, o cualquier otro detalle relevante.
                </p>
            </div>
            <div class="col-md-8 col-12 right-column">
                <div class="image-container">
                    <div class="image">
                        <img src="{{ asset('images/producto1.png') }}" alt="Imagen 1">
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/producto1.png') }}" alt="Imagen 2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row image-somos">
            <div class="text">
                <h4>Accesorios textiles</h4>
                <p>Empresa familiar de madre e hija, creando productos variados y únicos.</p>
            </div>

            <img src="{{ asset('images/producto1.png') }}" alt="">
        </div>
    </div>
</body>

