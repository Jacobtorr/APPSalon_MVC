<?php

namespace Controllers;

use MVC\Router;
use Model\Servicio;

class ServicioController {
    public static function index (Router $router) {
        session_start();
        isAdmin();
        
        $servicios = Servicio::all();

        $router->render('/servicios/index', [
            'nombre' => $_SESSION['nombre'],
            'servicios' => $servicios
        ]);
    }

    public static function crear (Router $router) {
        session_start();
        isAdmin();
        
        //Consulta para obtener todos los vendedores
        $servicio = new Servicio;
        $alertas = [];
        // Arreglo con mensajes de errores
        $alertas = Servicio::getAlertas();

        // Ejecutar el codigo una vez que el usuario envie el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $servicio->sincronizar($_POST);

            // Validar que no haya campos vacios
            $alertas = $servicio->validar();

            if(empty($alertas)) {
                $servicio->guardar();
                header('Location: /servicios');
            }
        }

        $router->render('/servicios/crear', [
            'nombre' => $_SESSION['nombre'],
            'servicio' => $servicio,
            'alertas' => $alertas
        ]);
    }

    public static function actualizar (Router $router) {
        session_start();
        isAdmin();

         //Consulta para obtener todos los servicios
         if(!is_numeric($_GET['id'])) return;
         $servicio = Servicio::find($_GET['id']);
         $alertas = [];

        //$alertas = Servicio::getAlertas();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            //Asignar los atributos
            $servicio->sincronizar($_POST);
            // Validar que no haya campos vacios
            $alertas = $servicio->validar();

            if(empty($alertas)) {
                $servicio->guardar();
                header('Location: /servicios');
            }
          
        }

        $router->render('/servicios/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'servicio' => $servicio,
            'alertas' => $alertas
        ]);
    }

    public static function eliminar () {
        session_start();
        isAdmin();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $servicio = Servicio::find($id);
            $servicio->eliminar();
            header('Location: /servicios');
        }

    }
}