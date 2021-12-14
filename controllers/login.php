<?php

class login extends controller
{
    public function indexAction()
    {
        $this->loadView('user/login/login_index', array('title' => '.: APARATCHI | ورود :.'));
    }

}