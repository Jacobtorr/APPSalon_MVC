<h2 class="nombre-pagina">Nuevo Servicio</h2>

<p class="descripcion-pagina">Llena todos los campos para anadir un nuevo servicio</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/servicios/crear" method="POST" class="formulario">
    
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" value="Guardar Servicio" class="boton">

</form>