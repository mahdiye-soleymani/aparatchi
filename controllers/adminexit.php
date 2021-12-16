<?php


class adminexit extends controller
{
    public function indexAction()
    {
         session_destroy();  // سشن رو از بین میبره
         header('location:adminlogin'); // میگیم برو به صفحه ادمین لاگین
    }
}