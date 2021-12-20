<?php


class database
{
    protected $connect;

    public function __construct()
    {
        $option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //مشکل  فارسی
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING   //  فعال  کردن ارور لاگ
        ];
        $this->connect = new PDO('mysql:host=localhost;dbname=aparatchi', 'root', '', $option);
    }
}

?>