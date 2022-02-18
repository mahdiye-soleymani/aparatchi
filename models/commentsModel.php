<?php

class commentsModel extends database
{
    function sendComments( $content, $info,$title,$id)
    {

        if (isset($_POST['sendComment'])) {
            $result =$this->connect->prepare('INSERT INTO tbl_comments SET content=?,info=?,permission=?,title=?,postid=?');
            $result->bindValue(1, $content);
            $result->bindValue(2, $info);
            $result->bindValue(3, 0);
            $result->bindValue(4, $title);
            $result->bindValue(5, $id);
            if ($result->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

//    function showPostInfo($title)
//    {
//        $result = $this->connect->prepare('SELECT * FROM `tbl_post` WHERE `title`=?');
//        $result->bindValue(1, $title);
//        $result->execute();
//        if ($result->rowCount() >= 1) {
//            $row = $result->fetch(PDO::FETCH_OBJ);
//            return $row;
//        } else {
//            return false;
//        }
//    }


}