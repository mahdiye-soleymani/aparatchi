<?php


// کنترلر پیشفرض

class aparatchi extends controller
{
    public function indexAction()
    {
        //ویومان را فراخوانی میکنیم
        $this->loadView('user/aparatchi/aparatchi_index', array('title' => '.: APARATCHI | آپاراتچی :.'));
    }

}