<?php
    require_once('controllers/inicio.controller.php');

    // si no viene una "action", definimos una por defecto
    if ($_GET['action'] == '')
        $_GET['action'] = 'ver';

    // parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
    $partesURL = explode('/', $_GET['action']);
    
    switch ($partesURL[0]) {
        case 'inicio':
            $controller = new InicioController();
            $controller -> mostrarInicio();
            break;
        case 'alumnos':
        $controller = new InicioController();
        $controller ->showStudents();
        break;
        case 'administrador':
        $controller = new InicioController();
        $controller -> mostrarInicio();
        break;
        default:
            $controller = new InicioController();
            $controller -> mostrarInicio();
            break;
    }
    
?>