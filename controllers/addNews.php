<?php


class addNews extends controller
{
    public function indexAction()
    {

        $NewsModel = $this->loadModel('newsModel');
        $message_error_register = null;
        $message_success_register = null;
        if (isset($_POST['btnNews'])) {
            if (!empty($_POST['titleNews']) && !empty($_POST['content'])&& !empty($_FILES['file_upload']['name'])) {
                $NewsModel->addNews();
                    $message_success_register = 'خبر جدید اضافه شد.';


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