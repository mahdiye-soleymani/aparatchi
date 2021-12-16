<?php


class adminlistmember extends controller
{
    public function indexAction()
    {
        $member_model = $this->loadModel('memberModel');
        $this->loadView('admin/listmember/listmemberindexview', array('title' => 'لیست کاربران آپاراتچی'
        , 'membermodel' => $member_model

        ));
    }
}