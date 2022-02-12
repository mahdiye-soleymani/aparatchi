<?php

class listNewsModel extends database
{
    public function listNews()
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_news`');
        $result->execute();
        if ($result->rowCount() >= 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function deleteNews($id)
    {
        $result = $this->connect->prepare('DELETE FROM `tbl_news` WHERE `id`=?');
        $result->bindValue(1, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function listNewsByid($id)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_news` WHERE `id`=?');
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اطلاعات رو واکشی کن درصورتی که یک سطر یا بیشتر از یک سطر بتواند پیدا کند
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
    public function updateNews($titleNews, $newName, $content, $id)
    {
        $result = $this->connect->prepare('UPDATE `tbl_news` SET `title`=?,`pic`=?,`content`=? WHERE `id`=?');
        $result->bindValue(1, $titleNews);
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