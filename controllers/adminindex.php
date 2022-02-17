<?php

class adminindex extends controller
{

    public function indexAction()
    {
        $membermodel = $this->loadModel('memberModel');
        $postModel = $this->loadModel('postModel');
        $newsModel = $this->loadModel('newsModel');
        $this->loadView('admin/index/admin_index', array('title' => '.: پنل مدیریت آپاراتچی :.'
        , 'countmember'=>$membermodel->countmember()
        , 'countpost'=>$postModel->countpost()
        , 'newsModel'=>$newsModel->newscount()
        ));
    }
}