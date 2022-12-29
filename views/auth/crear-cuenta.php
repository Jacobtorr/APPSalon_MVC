<h1 class="nombre-pagina">Crear cuenta</h1>

<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" value="<?php echo s($usuario->nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Tu Apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>

    <div class="campo">
        <label for="telefono">Telefono</label>
        <input type="tel" name="telefono" id="telefono" placeholder="Tu Telefono" value="<?php echo s($usuario->telefono); ?>">
    </div>
    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" placeholder="Tu E-mail" value="<?php echo s($usuario->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Password">
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesion</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>