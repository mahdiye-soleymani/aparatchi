<?php


class controller
{
    public function loadModel($model)
    {
        // این کد فراخوانی مادل
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../models/' . $model . '.php')) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../models/' . $model . '.php';
            $object = new $model;
            return $object;
        }
    }

    public function loadView($view, $aparatchi = array())
    {
        // این کد فراخوانی ویو شد
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../views/' . $view . '.php')) {
//            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/common/header.php';

            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/' . $view . '.php';
//            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/common/footer.php';

        } else {
            return false;
        }
    }
}


?>