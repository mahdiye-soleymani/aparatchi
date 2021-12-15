<?php

class adminlogin extends controller
{
    public function indexAction()
    {
        $message_error_loginadmin = null;
        if (isset($_POST['btnloginadmin'])) {
            $email = $_POST['emailloginadmin'];
            $password = hashpassword($_POST['passwordloginadmin']);
            $check_login = $this->loadModel('adminloginModel')->Login_admin($email, $password);
            if ($check_login) {
                // اکر مدیر مشخصات ورود رو درست زده باشه
                $_SESSION['wellcom_to_adminindex'] = $email;   // ایجاد سشن
                header('location:adminindex');
            } else {
                // اگر مدیر مشخصات ورود رو اشتباه زده باشه
                $message_error_loginadmin = 'ایمیل یا پسورد اشتباه میباشد';
            }

        }

        $this->loadView('admin/login/loginindex',array('title' => '.:ورود به پنل مدیریت:.', 'message_error_loginadmin' => $message_error_loginadmin));
    }
}