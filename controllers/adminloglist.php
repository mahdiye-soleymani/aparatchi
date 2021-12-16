<?php


class adminloglist extends controller
{
    public function indexAction()
    {
        $member_model = $this->loadModel('memberModel');
        $this->loadView('admin/log/index',array('title'=>'نمایش لاگ کاربران'
        ,
         'membermodel' => $member_model
        ));
    }
}