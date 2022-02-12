<?php

class error404 extends controller
{
    public function indexAction()
    {

        $this->loadView('admin/error404page', array('title' => '.: APARATCHI |اضافه کردن دسته بندی :.'

        ));
    }
}

