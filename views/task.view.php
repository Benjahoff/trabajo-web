<?php

class TaskView {

    public function showTasks($tareas) {
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>Lista de Tareas</title>
        </head>
        <body>
            <div class="container">
                <h1>Lista de tareas</h1>

                <form action="nueva" method="POST">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Título</label>
                                <input name="titulo" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Prioridad</label>
                                <select name="prioridad" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea name="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>

                <ul class="list-group mt-4">';
                foreach($tareas as $tarea) {
                    $html .= '<li class="tarea list-group-item';
                    if ($tarea->finalizada)
                        $html .= ' finalizada';
                    $html .= '">' . $tarea->titulo;
                    $html .= ' <small><a href="tarea/'.$tarea->id_tarea.'">VER</a></small> ';
                    if (!$tarea->finalizada)
                        $html .= ' <small><a href="finalizar/'.$tarea->id_tarea.'">LISTO</a></small> ';
                    $html .=' <small><a href="eliminar/'.$tarea->id_tarea.'">ELIMINAR</a></li></small>';
                }
                $html .= '</ul>
            </div>
        </body>
        </html>';

        echo $html;
    }

    public function showError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }

    /**
     * Construye el html que permite visualizar el detalle de una tarea determinada.
     */
    function showTask($tarea) {
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>Lista de Tareas</title>
        </head>
        <body>';
        $html .= '<h1>' . $tarea->titulo . ' (' . $tarea->prioridad .')</h1>';
        $html .= '<p>' . $tarea->descripcion . '</p>';
        $html .= '</body>
        </html>';

        echo $html;
    }
}