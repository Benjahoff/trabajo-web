<?php

class TaskModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=escuela;charset=utf8', 'root', '');
    }

    public function getAll() {
        $query = $this->db->prepare('SELECT * FROM alumno ORDER BY id_especialidad ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
        
    }
}