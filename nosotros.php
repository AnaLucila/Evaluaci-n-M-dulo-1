<?php include("TEMPLATE/header.php"); ?>

            <!--Slider de imágenes-->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
            <img src="./Imagenes/casamiento.jpeg" class="d-block w-100" alt="Imagen de novios">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="./Imagenes/Corporativos.jpeg" class="d-block w-100" alt="Imagen de copas sobre una mesa para un evento">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="./Imagenes/RetratoF.jpeg" class="d-block w-100" alt="Imágen de retrato familiar">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-fluid">
        <div class="w-75 m-auto text-center" id="equipo">
            <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary text-center">Resultados Grandes</span></h1>
            <p class="fs-5">Somos un <span class="text-primary">estudio especializado </span>en generar contenido <span class="text-primary">fotográfico y audiovisual</span>, brindando <span class="text-primary">respuesta rápida, personalizada</span> y de <span class="text-primary">calidad</span> a nuestros clientes.</p>
        </div>
        <div class="row w-50 mx-auto my-5 servicio-fila">
            <img class="img-fuid" src="./Imagenes/freepik-export-20241202153408ONFZ.jpeg" alt="Chocando manos">
        </div>

        <div id="local" class="border-top border-2 w-100 m-auto text-center">
            <div class="mapa wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3285.692371343712!2d-58.453556925336144!3d-34.56134355525962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzTCsDMzJzQwLjkiUyA1OMKwMjcnMDMuNSJX!5e0!3m2!1ses-419!2sar!4v1733156837883!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="wrapper fs-5">
                <div>
                    <h2>Dirección: <br> Sucre 1925 CABA</h2><br>
                    <h2>Cel: <br> 11-2345-6789</h2><br>
                    <h2>Email: <br> fotografia@fotografia.com</h2>
                </div>
            </div>
        </div>
    </section>
    
<?php include("TEMPLATE/footer.php"); ?>       