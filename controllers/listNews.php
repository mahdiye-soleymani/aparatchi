<?php

class listNews extends controller
{
    public function indexAction()
    {
        $listNewsModel = $this->loadModel('listNewsModel');
        $this->loadView('admin/newsManage/listNews', array('title' => '.: APARATCHI |لیست پست :.'
        , 'listNewsModel' => $listNewsModel
        ));
    }

}