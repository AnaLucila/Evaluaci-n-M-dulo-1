<?php include("TEMPLATE/header.php"); ?>

<!--Formulario--BG-->

<section id="seccion-bg-contacto" class="border-bottom border-secondary border-2">
        <div id="bg-contacto"></div>

<!--Formulario-->
        <div class="container p-5" id="contenedor-formulario">
            <div id="titulo-formulario" class="text-center mb-4">
                <h2 id="contacto">Contacto</h2>
                <p class="fs-5">Contactanos por más información.</p>
            </div>
            <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribí tu mensaje" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary w-100 fs-5">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    
<?php include("TEMPLATE/footer.php"); ?>    