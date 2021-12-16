<?php

class adminindex extends controller
{

    public function indexAction()
    {
        $membermodel = $this->loadModel('memberModel');
        $this->loadView('admin/index/admin_index', array('title' => '.: پنل مدیریت آپاراتچی :.'
        , 'countmember'=>$membermodel->countmember()
        ));
    }
}