<?php
    require_once('controllers/task.controller.php');

    // si no viene una "action", definimos una por defecto
    if ($_GET['action'] == '')
        $_GET['action'] = 'ver';

    // parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
    $partesURL = explode('/', $_GET['action']);
    
    switch ($partesURL[0]) {
        case 'tarea':
            $controller = new TaskController();
            $controller->showTask($partesURL[1]);
            break;
        
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
    
?>