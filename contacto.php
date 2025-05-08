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
            <form action="enviar_consulta.php" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre"  placeholder="Escribí tu nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Escribí tu apellido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="nombre@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" name="mensaje" placeholder="Escribí tu mensaje" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary w-100 fs-5" value="Enviar mensaje">
                </div>
            </form>
        </div>
    </section>

    
<?php include("TEMPLATE/footer.php"); ?>    