<?php

class listCommentsModel extends database
{
    public function listComments()
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_comments`');
        $result->execute();
        if ($result->rowCount() >= 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function deleteComments($id)
    {
        $result = $this->connect->prepare('DELETE FROM `tbl_comments` WHERE `id`=?');
        $result->bindValue(1, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function userName($email)
    {
        $result = $this->connect->prepare('SELECT username FROM `tbl_users` WHERE `email`=?');
        $result->bindValue(1, $email);
        $result->execute();
        if ($result->rowCount() == 1) {
            return $result->fetchall(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function showCommentsOfPost($postid)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_comments` WHERE `postid`=?
&&  `permission` = ?');
        $result->bindValue(1, $postid);
        $result->bindValue(2, 1);
        $result->execute();
        if ($result->rowCount() == 1) {
            return $result->fetchall(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function updateComments($id)
    {
        $result = $this->connect->prepare('UPDATE `tbl_comments` SET `permission`=? WHERE `id`=?');
        $result->bindValue(1, 1);
        $result->bindValue(2, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
}