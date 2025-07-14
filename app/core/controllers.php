<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View tidak ditemukan: ' . $view);
        }
    }

    public function modal($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}