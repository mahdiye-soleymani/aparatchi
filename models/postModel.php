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
                move_uploaded_file($tmp_pic, 'public/admin/img/post' . $newName);
                $result = $this->connect->prepare('INSERT INTO tbl_post SET title=?,pic=?,content=?,writer=?');
                $result->bindValue(1, $_POST['titlePost']);
                $result->bindValue(2, $_POST['content']);
                $result->bindValue(3, $newName);
                $result->bindValue(4, $_SESSION['info']);
                $result->execute();
            }
        }
    }
}