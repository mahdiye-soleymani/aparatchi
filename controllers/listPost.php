<?php

class listPost extends controller
{
    public function indexAction()
    {
        $listPostModel = $this->loadModel('listPostModel');
        $this->loadView('admin/postManage/listPost', array('title' => '.: APARATCHI |لیست پست :.'
        , 'listPostModel' => $listPostModel
        ));
    }

}