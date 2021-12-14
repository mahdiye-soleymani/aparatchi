<?php

class acount extends controller
{
    public function indexAction()
    {
        $this->loadView('user/acount/acount_index', array('title' => '.: APARATCHI | پنل کاربری :.'));
    }
}