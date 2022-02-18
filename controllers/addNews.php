<?php


class addNews extends controller
{
    public function indexAction()
    {

        $newsModel = $this->loadModel('newsModel');
        $message_error_register = null;
        $message_success_register = null;
        if (isset($_POST['btnNews'])) {
            if (!empty($_POST['titleNews']) && !empty($_POST['content'])&& !empty($_FILES['file_upload']['name'])) {
                if ($newsModel->checkTitle($_POST['titleNews'])) {
                    $message_error_register = 'خبری با این عنوان وجود دارد';
                }else{
                    $newsModel->addNews();
                    $message_success_register = 'خبر جدید اضافه شد.';
                    }

            } else {
                $message_error_register = 'لطفا اطلاعات خواسته شده را وارد نمایید';
            }


        }
        $this->loadView('admin/newsManage/addNews', array('title' => '.: APARATCHI |اضافه کردن اخبار :.',
            'error' => $message_error_register,
            'success' => $message_success_register
        ));
    }
}