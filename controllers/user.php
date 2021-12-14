<?php

class user extends controller
{
    public function indexAction()
    {
        $this->loadView('user/users/users_index', array('title' => '.: APARATCHI | پنل کاربری :.'));
    }
}