<?php

class addPost extends controller
{
    public function indexAction()
    {

        $postModel = $this->loadModel('postModel');
        $message_error_register = null;
        $message_success_register = null;
        if (isset($_POST['btnPost'])) {

            if (!empty($_POST['titlePost']) && !empty($_POST['content']) && !empty($_FILES['file_upload']['name'])) {
                if ($postModel->checkTitle($_POST['titlePost'])) {

                    $message_error_register = 'پستی با این عنوان وجود دارد';
                }else{
                    $postModel->addPost();
                    $message_success_register = 'پست جدید اضافه شد.';
                }


            } else {
                $message_error_register = 'لطفا اطلاعات خواسته شده را وارد نمایید';
            }
        }

        $this->loadView('admin/postManage/addPost', array('title' => '.: APARATCHI |اضافه کردن پست :.'
        , 'error' => $message_error_register,
            'success' => $message_success_register
        ));
    }
}