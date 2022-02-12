<?php

class newsPage extends controller
{
    public function show($id)
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $newsModel = $this->loadModel('newsModel');

        $this->loadView('user/news/newsPage', array('title' => '.:aparatchi|آپاراتچی:.'
        , 'showNews' => $newsModel->showNewsInfo($id)

        , 'listMenuShow' => $listMenuShow
        ,'listSubMenuShow'=>$categorymodel
        ));

    }
}

