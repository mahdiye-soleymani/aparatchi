<?php


// کنترلر پیشفرض

class aparatchi extends controller
{
    public function indexAction()
    {
        $postModel = $this->loadModel('postModel');
        $sliderModel = $this->loadModel('sliderModel');
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();
//        $listSubMenuShow=$categorymodel->listSubMenuShow();

        //ویومان را فراخوانی میکنیم
        $this->loadView('user/aparatchi/aparatchi_index', array('title' => '.: APARATCHI | آپاراتچی :.'
        , 'listMenuShow' => $listMenuShow
        ,'listSubMenuShow'=>$categorymodel
        ,'pics' => $sliderModel->listSlider()
        ,'lastPost' => $postModel->showLastPost()

        ,'showpost' => $postModel->showPostForShowInSite()
        ));
    }

}