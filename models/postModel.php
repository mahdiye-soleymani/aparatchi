<?php

class postModel extends database
{
    function addPost()
    {
        if (isset($_POST['btnPost'])) {
            $picname = $_FILES['file_upload']['name'];
            $tmp_pic = $_FILES['file_upload']['tmp_name'];
            $exp = explode('.', $picname);
            $passwand = end($exp);
            if (in_array($passwand, array('png', 'jpeg', 'jpg'))) {
                $newName = rand(1, 200) . 'picPost' . '.' . $passwand;
                move_uploaded_file($tmp_pic, 'public/admin/img/post/' . $newName);
                $result = $this->connect->prepare('INSERT INTO tbl_post SET title=?,pic=?,content=?,writer=?');
                $result->bindValue(1, $_POST['titlePost']);
                $result->bindValue(2, $newName);
                $result->bindValue(3, $_POST['content']);
                $result->bindValue(4,'mahdiye');

                $result->execute();
            }
        }
    }

    function showPostForShowInSite()
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_post');
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }
    function showLastPost()
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_post 
    ORDER by id desc
    LIMIT 3');
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }

    function showPostInfo($id)
    {
        $result = $this->connect->prepare('SELECT * FROM `tbl_post` WHERE `id`=?');
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }
    public function countpost()
    {
        $result = $this->connect->prepare('SELECT COUNT(id) AS `countpost` FROM `tbl_post` ');
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_OBJ)[0]->countpost;
        } else {
            return false;
        }
    }
    function search($title)
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_post WHERE title LIKE ?');
        $result->bindValue(1, "%$title%");
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }
    public function checkTitle($title)
    {

        $result = $this->connect->prepare('SELECT `title` FROM `tbl_post` WHERE `title`=?');
        $result->bindValue(1, $title);
        $result->execute();
        if ($result->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
}