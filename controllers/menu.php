<?php

class menu extends controller
{
    public function estelahat()
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

//        $postModel = $this->loadModel('postModel');

        $this->loadView('user/menu/estelahat', array('title' => '.:aparatchi|اصطلاحات:.'


        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));
    }
    public function seryal250()
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

//        $postModel = $this->loadModel('postModel');

        $this->loadView('user/menu/seryal250', array('title' => '.:aparatchi|سریال های برتر:.'


        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));
    }
    public function filmimdb()
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

//        $postModel = $this->loadModel('postModel');

        $this->loadView('user/menu/filmimdb', array('title' => '.:aparatchi|فیلم های برتر:.'


        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));
    }

}