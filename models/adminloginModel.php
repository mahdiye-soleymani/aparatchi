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
            return  true;
        } else {
            return false;
        }
    }
}