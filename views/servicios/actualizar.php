<h2 class="nombre-pagina">Actualizar Servicio</h2>

<p class="descripcion-pagina">Modfica los valores del formulario</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form method="POST" class="formulario">
    
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" value="Guardar Cambios" class="boton">

</form>