<?php

class adminloginModel extends database
{
    public function Login_admin($email, $password)
    {
        $result = $this->connect->prepare("SELECT * FROM `tbl_admin` WHERE `email`=? and `password`=?");
        $result->bindValue(1, $email);
        $result->bindValue(2, $password);
        $result->execute();
        //چون فقط باید یکی باشد و تکراری نداشته باشیم
        if ($result->rowCount() == 1) {
            if (!empty($_POST['rememberloginsite1'])) {
                /* زمانی که تیک را زده ایم*/
                setcookie('EmailCookiea', $email, time() + 86400);
                setcookie('PasswordCookiea', $password, time() + 86400);
            } else {

                if (isset($_COOKIE['EmailCookiea'])) {
                    setcookie('EmailCookiea', '');
                }
                if (isset($_COOKIE['PasswordCookiea'])) {
                    setcookie('PasswordCookiea', '');
                }
                /* زمانی که تیک را نزده ایم*/
            }
            return  true;
        } else {
            return false;
        }
    }

}