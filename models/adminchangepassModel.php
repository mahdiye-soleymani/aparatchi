<?php


class adminchangepassModel extends database
{
    public function checkPasswordAdmin($password)
    {
        $result = $this->connect->prepare('SELECT `password` FROM `tbl_admin` WHERE `password`=?  LIMIT 1');
        $result->bindValue(1, $password);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اکر پسورد با پسورد داده شده یکسان بود
            return true;
        } else {
            return false;
        }
    }


    public function changePasswordAdmin($password)
    {
        $result = $this->connect->prepare('UPDATE `tbl_admin` SET  `password`=? LIMIT 1');
        $result->bindValue(1, $password);
        if ($result->execute()) {
            return true;
        } else {
            return  false;
        }
    }
}

