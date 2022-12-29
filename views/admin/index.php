<h1 class="nombre-pagina">Panel de Administracion</h1>

<?php  include_once __DIR__ . '/../templates/barra.php'; ?>

<h2>Buscar Citas</h2>
<div class="busqueda">
    <form class="formulario" action="">
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" value="<?php echo $fecha;  ?>">
        </div>
    </form>
</div>

<?php 
    if(count($citas) === 0) {
        echo "<h3>No hay citas en esta fecha</h3>";
    }
?>

<div id="citas-admin">
    <ul class="citas">
        <?php 
            $idCita = 0;
            foreach($citas as $key => $cita) {

                if($idCita !== $cita->id) { 
                    $total = 0;
        ?>
        <li>
            <h3>Datos del cliente</h3>
            <p>ID: <span><?php echo $cita->id; ?></span></p>
            <p>Cliente: <span><?php echo $cita->cliente; ?></span></p>
            <p>Email: <span><?php echo $cita->email; ?></span></p>
            <p>Telefono: <span><?php echo $cita->telefono; ?></span></p>
            <p>Hora: <span><?php echo $cita->hora; ?></span></p>
            
            <h3>Servicios</h3>
            <?php  
                $idCita = $cita->id;
            } // Fin de IF 
                $total += $cita->precio * 1.12;
            ?>
        <p class="servicio">Servicio: <span><?php echo $cita->servicio . " $" . $cita->precio ?></span></p>

        <?php 
            $actual = $cita->id;
            $proximo = $citas[$key + 1]->id ?? 0;

            if(esUltimo($actual, $proximo)) { ?>
            <p class="servicio">IVA: <span>12%</span></p>
                <p class="total">Total: <span>$<?php echo $total; ?></span></p>

                <form action="/api/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $cita->id; ?>">
                    <input type="submit" value="Eliminar" class="boton-eliminar">
                </form>

            <?php }
         } // Fin de FOREACH ?>

    </ul>

</div>

<?php 
    $script = "<script src='build/js/buscador.js'></script>";
?>