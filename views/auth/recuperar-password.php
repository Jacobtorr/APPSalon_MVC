<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a contunuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>


<?php if ($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Nuevo Password">
    </div>

    <input type="submit" value="Guardar Nuevo password" class="boton">


</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesion</a>
    <a href="/crear-cuenta">¿Aun no tienes cuenta? Crear una</a>
</div>