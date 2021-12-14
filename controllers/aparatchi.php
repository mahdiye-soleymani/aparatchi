<?php


// این کنترلر پیشفرض این برنامه میباشد

class aparatchi extends controller
{
    public function indexAction()
    {
        //ویو امان را فراخوانی میکنیم
        $this->loadView('user/aparatchi/aparatchi_index', array('title' => '.: APARATCHI | آپاراتچی :.'));
    }

}