<?php

class newsModel extends database
{
    function addNews()
    {
        if (isset($_POST['btnNews'])) {
            $picname = $_FILES['file_upload']['name'];
            $tmp_pic = $_FILES['file_upload']['tmp_name'];
            $exp = explode('.', $picname);
            $passwand = end($exp);
            if (in_array($passwand, array('png', 'jpeg', 'jpg'))) {
                $newName = rand(1, 200) . 'picNewst' . '.' . $passwand;
                move_uploaded_file($tmp_pic, 'public/admin/img/news/' . $newName);
                $result = $this->connect->prepare('INSERT INTO tbl_news SET title=?,pic=?,content=?,writer=?');
                $result->bindValue(1, $_POST['titleNews']);
                $result->bindValue(2, $newName);
                $result->bindValue(3, $_POST['content']);
                $result->bindValue(4,'mahdiye');

                $result->execute();
            }
        }
    }

    function showNewsForShowInSite()
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_news ');
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }
    function showLastNews()
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_news
    ORDER by id desc
    LIMIT 5');
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }

    function showNewsInfo($id)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_news` WHERE `id`=?');
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }
}