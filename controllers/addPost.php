<?php

class addPost extends  controller
{
    public function indexAction()
    {

        $postModel = $this->loadModel('postModel');
        if (isset($_POST['btnPost'])) {
            $postModel->addPost();

        }

        $this->loadView('admin/postManage/addPost', array('title' => '.: APARATCHI |اضافه کردن پست :.'
            ));
    }
}