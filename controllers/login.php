<?php

class login extends controller
{
    public function indexAction()
    {
        $messageloginerrorsite = null;
        $membermodel = $this->loadModel('memberModel');
        if (isset($_POST['btnloginsite'])) {
            if (!empty($_POST['email_loginsite']) && !empty($_POST['password_loginsite'])) {
                $emailloginsite = trim_url(security($_POST['email_loginsite']));
                $passwordloginsite = trim_url($_POST['password_loginsite']);

                if ($membermodel->logintosite($emailloginsite, $passwordloginsite)) { // مشخصات به درستی وارد شده بود

                    if($membermodel->checkbanmember($emailloginsite)->status ==0){//یعنی کاربر بن نیس
                        $_SESSION['emailmember']=$emailloginsite;
                        $ip = $membermodel->GetRealIp();
                        $membermodel->insertLog($_SESSION['emailmember'],$ip);
                        header('location:'.AddressMyWebsite);

                    }else{
                        $messageloginerrorsite ='دسترسی شما به سایت تا مدت نا مشخصی محدود شده است و امکان ورود نمیباشد';
                    }

                } else {
                    $messageloginerrorsite ='ایمیل یا پسورد مورد نظر شما اشتباه میباشد';
                }

            }
        }
        $this->loadView('user/login/login_index', array('title' => '.: APARATCHI | ورود :.'
        ,'messageloginerrorsite'=>$messageloginerrorsite
        ));
    }
}