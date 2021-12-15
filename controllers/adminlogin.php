<?php

class adminlogin extends controller
{
    public function indexAction()
    {
        $this->loadView('admin/login/loginindex', array('title' => '.:ورود به پنل مدیریت:.'));
    }
}