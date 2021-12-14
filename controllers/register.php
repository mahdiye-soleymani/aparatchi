<?php

class register extends controller
{
    public function indexAction()
    {
        //ویو امان را فراخوانی میکنیم
        $this->loadView('user/register/register', array('title' => '.: APARATCHI | ثبتنام :.'));
    }

}