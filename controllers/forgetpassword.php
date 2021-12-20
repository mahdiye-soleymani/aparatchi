<?php
//درستش کن
class forgetpassword extends controller
{
    public function indexAction()
    {
        $this->loadView('user/forgetpass/forgetpass_index', array('title' => '.: APARATCHI | پنل کاربری :.'));
    }
}