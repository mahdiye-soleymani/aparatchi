<?php

class acount extends controller
{
    public function showAcount($Email)
    {
        //        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $accountModel = $this->loadModel('accountModel');

        $this->loadView('user/acount/acount_index', array('title' => '.:aparatchi|پنل کاربری:.'
        , 'showAccount' => $accountModel->showAccount($Email)
        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));


//    }

//    public function indexAction()
//    {
//        $categorymodel = $this->loadModel('categorymodel');
//        $listMenuShow = $categorymodel->listMenuShow();
//
//        $this->loadView('user/acount/acount_index', array('title' => '.: APARATCHI | پنل کاربری :.'
//        , 'listMenuShow' => $listMenuShow
//        ,'listSubMenuShow'=>$categorymodel
//
//        ));
//    }
//    public function indexAction()
//    {
//        $categorymodel = $this->loadModel('categorymodel');
//        $listMenuShow = $categorymodel->listMenuShow();
//        $this->loadView('user/acount/Acount_info', array('title' => '.: APARATCHI |اضافه کردن دسته بندی :.'
//        ,'listCategory'=>$categorymodel->listCategory()));
//    }
    }
}