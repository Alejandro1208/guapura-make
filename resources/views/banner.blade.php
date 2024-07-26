<style>
    .josefin-sans {
        font-family: "Josefin Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    .banner {
        position: relative;
        width: 100%;
        height: 80vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        font-family: "Josefin Sans";
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 80vh;
        background: rgba(57, 57, 57, 0.5);
        /* Ajusta la opacidad según sea necesario */
        z-index: -1;
    }

    .banner-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .banner-content {
        position: relative;
        max-width: 60%;
        padding: 50px;
        color: white;
        text-align: left;
        margin-left: 20px;
    }

    .banner-title {
        font-size: 80px;
        margin-bottom: 0px;
        padding: 0;
    }

    .banner-subtitle {
        font-size: 20px;
        font-weight: 100;
        margin: 10px 0px 24px 0px;
        padding: 0;
    }

    .banner-buttons {
        display: flex;
        gap: 20px;
    }

    .banner-button {
        font-size: 16px;
        padding: 18px 40px;
        border-radius: 28px;
        display: inline-block;
        background-color: white;
        color: rgb(68, 68, 68);
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .banner-button-2 {
        font-size: 16px;
        padding: 18px 40px;
        border-radius: 28px;
        display: inline-block;
        border: solid white;
        background-color: transparent;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .banner-button:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
    @media (max-width: 468px){
        .banner-content {
        padding: 0px;
        position: relative;
        margin-left: 10px;
        max-width: 95%;
        color: white;
        text-align: left;
    }
    .banner-title{
        font-size: 55px;
    }
    .banner-button {
        font-size: 14px;
        padding: 18px 40px;
        border-radius: 28px;
        display: inline-block;
        background-color: white;
        color: rgb(68, 68, 68);
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .banner-button-2 {
        font-size: 14px;
        padding: 18px 40px;
        border-radius: 28px;
        display: inline-block;
        border: solid white;
        background-color: transparent;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    }
</style>
<body>
    <div class="banner">
        <video autoplay muted loop class="banner-video">
            <source src="{{ asset('image/banner.mp4') }}" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
        <div class="overlay"></div>
        <div class="banner-content">
            <h1 class="banner-title">Accesorios Textiles</h1>
            <p class="banner-subtitle">Colores cálidos, variedad y creaciones únicas en familia

            </p>
            <div class="banner-buttons">
                <a href="#accion1" class="banner-button">Ver productos</a>
                <a href="#accion2" class="banner-button-2">Contacto</a>
            </div>
        </div>
    </div>


</body>
