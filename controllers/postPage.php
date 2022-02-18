<?php

class postPage extends controller
{
    public function show($id)
    {
//        menu
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $listCommentsModel = $this->loadModel('listCommentsModel');
        $postModel = $this->loadModel('postModel');

        $this->loadView('user/posts/postPage', array('title' => '.:aparatchi|آپاراتچی:.'
        , 'showPost' => $postModel->showPostInfo($id)
        , 'showComments' => $listCommentsModel
        , 'postid' => $id
        , 'listMenuShow' => $listMenuShow
        , 'listSubMenuShow' => $categorymodel
        ));

    }

}