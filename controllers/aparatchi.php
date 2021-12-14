<?php


// این کنترلر پیشفرض این برنامه میباشد

class aparatchi extends controller
{
    public function indexAction()
    {
        //ویومان را فراخوانی میکنیم
        $this->loadView('user/aparatchi/aparatchi_index', array('title' => '.: APARATCHI | آپاراتچی :.'));
    }

}