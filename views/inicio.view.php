<?php
    class InicioView {
        function mostrarInicio() {
            echo $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Inicio</title>
            </head>
            <body>
            <form action="alumnos" method="POST">    
                <button>Ver alumnos!!</button>
            </form>
            <form action="administrador" method="POST">
                <button>admin</button>
            </form>
            </body>
            </html>';
        }
        function showStudents($lista) {
            echo $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Inicio</title>
            </head>
            <body>
            <ul>';
            foreach ($lista as $listas) {
                $html .= '<li>'.$listas->nombre.'</li>';
            }              
            $html .= '</ul>
            </body>
            </html>';
        }
    }
?>