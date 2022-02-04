<?php

class userlogdelete extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';

    public function deletelogmember($id)
    {
        $membermodel = $this->loadModel('memberModel');
        if ($membermodel->deletememberlog($id)) {
            // اگر توانست کاربر را حذف کند
            header('location:' . $this->address . 'adminloglist');
        }
    }
}