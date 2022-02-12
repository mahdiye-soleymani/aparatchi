<?php

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

    }


    public function checkemail($email)
    {

        $result = $this->connect->prepare('SELECT `email` FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1, $email);
        $result->execute();
        if ($result->rowCount() == 1) {
            return true;
            //  ایمیل تکراریه
        } else {
            return false;
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

    public function deletememberlog($id)
    {
        $result = $this->connect->prepare('DELETE FROM `tbl_logusers` WHERE `id`=?');
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
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }


    public function updatemember($info, $username, $email, $banmember, $id)
    {
        $result = $this->connect->prepare('UPDATE `tbl_users` SET `info`=?,`username`=?,`email`=?,`status`=? WHERE `id`=?');
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $email);
        $result->bindValue(4, $banmember);
        $result->bindValue(5, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function logintosite($email, $password)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `email`=? AND `password`=?');
        $result->bindValue(1, $email);
        $result->bindValue(2, hashpassword($password));
        $result->execute();
        //چون ایمیل مان باید یونیک باشد
        if ($result->rowCount() == 1) {
            if (!empty($_POST['rememberloginsite'])) {
                /* زمانی که تیک را زده ایم*/
                setcookie('EmailCookie', $email, time() + 86400);
                setcookie('PasswordCookie', $password, time() + 86400);
            } else {

                if (isset($_COOKIE['EmailCookie'])) {
                    setcookie('EmailCookie', '');
                }
                if (isset($_COOKIE['PasswordCookie'])) {
                    setcookie('PasswordCookie', '');
                }
                /* زمانی که تیک را نزده ایم*/
            }
            // اطلاعات صحیح میباشد
            return true;
        } else {
            return false;
        }
    }

    public function checkbanmember($email)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1, $email);
        $result->execute();
        if ($result->rowCount() == 1) {
            //چون فقط یدونس
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function insertLog($email, $ip)
    {
        $result = $this->connect->prepare('INSERT INTO `tbl_logusers` SET `email`=?,`ip`=?');
        $result->bindValue(1, $email);
        $result->bindValue(2, $ip);
        $result->execute();
    }

    function GetRealIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }

    public function listlog()
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_logusers`');
        $result->execute();
        if ($result->rowCount() >= 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
}