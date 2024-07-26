<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    


    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #debdbb;
            color: #fff;
            padding: 20px 20px;
            position: relative;
            z-index: 2;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle .bar {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 4px 0;
            transition: 0.4s;
        }

        .nav-list {
            list-style: none;
            display: flex;
            margin: 0;
        }

        .nav-list li {
            margin-left: 20px;
        }

        .nav-list a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            display: block;
            transition: 0.3s;
        }

        .nav-list a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Estilos para dispositivos móviles */
        @media (max-width: 468px) {
            .menu-toggle {
                display: flex;
            }

            .nav-list {
                display: none;
                z-index: 1;
                position: absolute;
                overflow: hidden;
                top: 77px;
                right: 0;
                width: 240px;
                height: calc(50vh - 70px);
                background-color: #988483;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
            }

            .nav-list li {
                margin: 10px 0;
            }

            .nav-list.active {
                transform: translateX(0);
                display: flex;
                transition: transform 0.3s ease-in-out;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <header>
        <nav>
            <h2>Guapura Make</h2>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="nav-list" id="nav-list">
                <li><a href="#opcion1">Opción 1</a></li>
                <li><a href="#opcion2">Opción 2</a></li>
                <li><a href="#opcion3">Opción 3</a></li>
                <li><a href="#opcion4">Opción 4</a></li>
            </ul>
        </nav>
    </header>
    @include('banner')

    @include('productos')

    @include("quienes-somos")

    @include("footer")


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const navList = document.getElementById('nav-list');

            menuToggle.addEventListener('click', function() {
                navList.classList.toggle('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
