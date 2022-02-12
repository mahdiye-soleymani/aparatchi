<?php

class listPostModel extends database
{
    public function listPost()
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_post`');
        $result->execute();
        if ($result->rowCount() >= 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function deletePost($id)
    {
        $result = $this->connect->prepare('DELETE FROM `tbl_post` WHERE `id`=?');
        $result->bindValue(1, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function listPostByid($id)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_post` WHERE `id`=?');
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function updatePost($titlePost, $newName, $content, $id)
    {
        $result = $this->connect->prepare('UPDATE `tbl_post` SET `title`=?,`pic`=?,`content`=? WHERE `id`=?');
        $result->bindValue(1, $titlePost);
        $result->bindValue(2, $newName);
        $result->bindValue(3, $content);
        $result->bindValue(4, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
}