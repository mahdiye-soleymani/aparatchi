<?php

class adminindex extends controller
{

    public function indexAction()
    {
        $this->loadView('admin/index/admin_index', array('title' => '.: پنل مدیریت آپاراتچی :.'));
    }
}