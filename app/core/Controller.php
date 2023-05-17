<?php
class Controller{
    public function model($model){ //create model
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    public function view($view, $data = []){ //create view
        require_once '../app/views/' . $view . '.php';
    }
}