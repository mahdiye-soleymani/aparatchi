<?php

class search extends controller
{
    public function search()
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $postModel = $this->loadModel('postModel');
        $title=0;
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $title = $_GET['search'];
        }

        $this->loadView('user/search/searchPage', array('title' => '.:aparatchi|آپاراتچی:.'
        , 'search' => $postModel->search($title)
        , 'listMenuShow' => $listMenuShow
        ,'listSubMenuShow'=>$categorymodel
        ));

    }

}