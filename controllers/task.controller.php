<?php
include_once('models/task.model.php');
include_once('views/task.view.php');

class TaskController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    /**
     * Muestra la lista de tareas.
     */
    public function showTasks() {
        // obtengo tareas del model
        $tareas = $this->model->getAll();

        // se las paso a la vista
        $this->view->showTasks($tareas);
    }

    public function showTask($idTarea) {
          $tarea = $this->model->get($idTarea);

          if ($tarea) // si existe la tarea
            $this->view->showTask($tarea);
        else
            $this->view->showError('La tarea no existe');
    }

    /**
     * Agrega una nueva tarea a la lista.
     */
    public function addTask() {

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $prioridad = $_POST['prioridad'];
   
        if (!empty($titulo) && !empty($prioridad)) {
           $this->model->save($titulo, $descripcion, $prioridad);
           header("Location: ver");
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }

    public function endTask($idTarea) {
        $this->model->end($idTarea);
        header("Location: ../ver");
    }

    public function deleteTask($idTarea) {
        $this->model->delete($idTarea);
        header("Location: ../ver");
    }

}