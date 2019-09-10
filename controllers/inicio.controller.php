<?php
include_once('models/task.model.php');
include_once('views/inicio.view.php');

class InicioController {

    private $model;
    private $view;

    public function __construct() {
        // $this->model = new TaskModel();
        $this->view = new InicioView();
    }

    public function mostrarInicio() {
        // se las paso a la vista
        $this->view->mostrarInicio();
    }
    public function showStudents(){
        $lista = $this->model->getAll();
        $this->view->showStudents($lista);

        //   if ($lista) // si existen alumnos
        // else
        //     $this->view->showError('No hay alumnos');
    }
    /**
     * Agrega una nueva tarea a la lista.
     */
    // public function addTask() {

    //     $titulo = $_POST['titulo'];
    //     $descripcion = $_POST['descripcion'];
    //     $prioridad = $_POST['prioridad'];
   
    //     if (!empty($titulo) && !empty($prioridad)) {
    //        $this->model->save($titulo, $descripcion, $prioridad);
    //        header("Location: ver");
    //     } else {
    //         $this->view->showError("Faltan datos obligatorios");
    //     }
    // }

    // public function endTask($idTarea) {
    //     $this->model->end($idTarea);
    //     header("Location: ../ver");
    // }

    // public function deleteTask($idTarea) {
    //     $this->model->delete($idTarea);
    //     header("Location: ../ver");
    // }

}