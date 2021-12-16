<?php

//tbl_users
class memberModel extends database
{
    public function register($info, $username, $email, $password)
    {
        $result = $this->connect->prepare('INSERT INTO `tbl_users` SET `info`=?,`username`=?,`email`=?,`password`=?');
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $email);
        $result->bindValue(4, $password);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }

        // خروجی تابع رو به صورت بولینی کردیم (یا انجام میشه یا انجام نمیشه )
    }


    public function checkemail($email)
    {

        $result = $this->connect->prepare('SELECT `email` FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1, $email);
        $result->execute();
        if ($result->rowCount() == 1) {
            return true;
            // اینجا نتیجه میگیریم ایمیلی که کاربر وارد کرده قبلا یکی با ان ایمیل در وبسایت ما ثبت نام کرده است
        } else {
            return false;
            //با این ایمیل کسی در وبسایت ما ثبت نام نکرده است
        }
    }


    public function listmember()
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users`');
        $result->execute();
        if ($result->rowCount() >= 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function countmember()
    {
        $result = $this->connect->prepare('SELECT COUNT(id) AS `membercount` FROM `tbl_users` ');
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_OBJ)[0]->membercount;
        } else {
            return false;
        }
    }

    public function deletemember($id)
    {
        $result = $this->connect->prepare('DELETE FROM `tbl_users` WHERE `id`=?');
        $result->bindValue(1, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function listmemberwithid($id)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `id`=?');
        $result->bindValue(1,$id);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }


    public function updatemember($info, $username, $email, $banmember)
    {
        $result = $this->connect->prepare('UPDATE `tbl_users` SET `info`=?,`username`=?,`email`=?,`status`=?');
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $email);
        $result->bindValue(4, $banmember);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }

        // خروجی تابع رو به صورت بولینی کردیم (یا انجام میشه یا انجام نمیشه )
    }

    public function logintosite($email,$password){
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `email`=? AND `password`=?');
        $result->bindValue(1,$email);
        $result->bindValue(2,$password);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات صحیح میباشد
            return true;
        } else {
            return false;
        }
    }

    public function checkbanmember($email)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1,$email);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
}