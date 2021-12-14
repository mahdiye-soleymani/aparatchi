<?php


class controller
{
    public function loadModel($model)
    {
        //  فراخوانی مدل
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../models/' . $model . '.php')) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../models/' . $model . '.php';
            $object = new $model;
            return $object;
        }
    }

    public function loadView($view, $aparatchi = array())
    {
        // فراخوانی ویو
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../views/' . $view . '.php')) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/' . $view . '.php';
        } else {
            return false;
        }
    }
}


?>