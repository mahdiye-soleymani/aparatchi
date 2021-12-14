<?php

class register extends controller
{
    public function indexAction()
    {
        $this->loadView('user/register/register_index', array('title' => '.: APARATCHI | ثبتنام :.'));
    }

}