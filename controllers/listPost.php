<?php

class listPost extends controller
{
    public function indexAction()
    {
//        $sliderModel = $this->loadModel('listPostModel');
//        if (isset($_POST['btnslider'])) {
//            $sliderModel->listPost();
//
//        }

        $this->loadView('admin/postManage/listPost', array('title' => '.: APARATCHI |لیست پست :.'));
    }
}