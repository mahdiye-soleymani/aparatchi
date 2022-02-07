<?php

class addPost extends  controller
{
    public function indexAction()
    {
        $sliderModel = $this->loadModel('postModel');
        if (isset($_POST['btnPost'])) {
            $sliderModel->addPost();

        }

        $this->loadView('admin/postManage/addPost', array('title' => '.: APARATCHI |اضافه کردن پست :.'));
    }
}