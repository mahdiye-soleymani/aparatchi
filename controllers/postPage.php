<?php

class postPage extends controller
{
    public function show($id)
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $postModel = $this->loadModel('postModel');

        $this->loadView('user/posts/postPage', array('title' => '.:aparatchi|آپاراتچی:.'
        , 'showPost' => $postModel->showPostInfo($id)

        , 'listMenuShow' => $listMenuShow
        ,'listSubMenuShow'=>$categorymodel
        ));

    }

}