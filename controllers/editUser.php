<?php

class editUser extends controller
{
    public function memberEdit($Email)
    {

        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

//        $accountModel = $this->loadModel('accountModel');
        $accountModel = $this->loadModel('accountModel');
        if (isset($_POST['submitedit'])) {

            $infoupdateregister = trim_url(security($_POST['email']));
//            $emailupdateregister = trim_url(security($_POST['email']));
            $usernameupdateregister = trim_url(security($_POST['username']));
//            $pass = trim_url(security($_POST['pass']));
            if ($accountModel->updatemember($infoupdateregister, $usernameupdateregister,$Email )) {
                $this->loadView('user/acount/acount_index', array('title' => '.:aparatchi|آپاراتچی:.'
                , 'showAccount' => $accountModel->showAccount($Email)
                , 'listMenuShow' => $listMenuShow
                , 'listSubMenuShow' => $categorymodel
                ));
            }
        }

        $this->loadView('user/acount/accountEdit', array('title' => 'ویرایش اطلاعات'
        , 'showAccount' => $accountModel->showAccount($Email)
        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));
    }
}
