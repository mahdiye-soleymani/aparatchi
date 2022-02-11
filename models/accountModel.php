<?php

class accountModel extends database
{
    public function showAccount($Email)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1, $Email);
        $result->execute();
        if ($result->rowCount() == 1) {
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function updatemember($info, $username, $Email)
    {
        $result = $this->connect->prepare('UPDATE `tbl_users` SET `info`=?,`username`=? WHERE `email`=?');
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $Email);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
}