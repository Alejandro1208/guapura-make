    <style>
        .footer {
            background-color: #debdbb; /* Color de fondo */
            color: #333;
            padding: 40px;
            margin-top: 20px
        }


        .footer .menu {
            margin-top: 15px;
        }

        .footer .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }

        .footer .menu ul li {
            margin: 0;
        }

        .footer .menu ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }

        .footer .menu ul li a:hover {
            color: #ba9e9d; /* Color al pasar el mouse */
        }

        .footer .tagline {
            margin-top: 20px;
            font-size: 18px;
            font-style: italic;
        }
        @media (max-width: 468px){
            .footer {
            background-color: #debdbb; /* Color de fondo */
            color: #333;
            padding: 26px;
            margin-top: 20px
        }
        }
    </style>
<body>
    <!-- Contenido del Footer -->
    <footer class="footer text-center">
        <div class="container-footer mt-3">
            <div class="row">
                <div class="col-md-4 logo">
                    <h3>Guapura Make</h3>
                </div>
                <div class="col-md-4 menu">
                    <ul>
                        <li><a href="#home">Inicio</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#quienes-somos">Quiénes Somos</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 tagline">
                    <p>Bordando sueños con amor y dedicación.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

