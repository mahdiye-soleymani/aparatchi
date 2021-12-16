<?php


class memberModel extends database
{
    public function register($username, $email, $password)
    {
        $result = $this->connect->prepare('INSERT INTO `tbl_users` SET  `username`=?,`email`=?,`password`=?');
        $result->bindValue(1, $username);
        $result->bindValue(2, $email);
        $result->bindValue(3, $password);
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
}