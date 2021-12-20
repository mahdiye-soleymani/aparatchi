<?php


class adminexit extends controller
{
    public function indexAction()
    {
         session_destroy();
         header('location:adminlogin');
    }
}