<?php

class categorymodel extends database
{


    function addCategory($title, $status)
    {
        $result = $this->connect->prepare('INSERT INTO `tbl_menu` SET `title`=?,`menuid`=?,`status`=?');
        $result->bindValue(1, $title);
        $result->bindValue(2, 0);
        $result->bindValue(3, $status);
        $result->execute();
    }

    function listCategory()
    {
//        نمایش منو های اصلی
        $result = $this->connect->prepare("SELECT * FROM `tbl_menu` WHERE `status`=?");
        $result->bindValue(1, 1);
        $result->execute();
        if($result->rowCount()>=1){
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    function subMenu($title,$menuid, $status)
    {
        $result = $this->connect->prepare('INSERT INTO `tbl_menu` SET `title`=?,`menuid`=?,`status`=?');
        $result->bindValue(1, $title);
        $result->bindValue(2, $menuid);
        $result->bindValue(3, $status);
        $result->execute();
    }

    function listMenuShow()
    {
// نمایش منو های اصلی در سایت
        $result = $this->connect->prepare("SELECT * FROM `tbl_menu` WHERE `menuid`=?");
        $result->bindValue(1, 0);
        $result->execute();
        if($result->rowCount()>=1){
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    function listSubMenuShow($menuid)
    {
// نمایش زیر منو در سایت
        $result = $this->connect->prepare("SELECT * FROM `tbl_menu` WHERE `menuid`=?");
        $result->bindValue(1, $menuid);
        $result->execute();
        if($result->rowCount()>=1){
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    function listMenu()
    {
// نمایش منو های اصلی در سایت
        $result = $this->connect->prepare("SELECT * FROM `tbl_menu`");
        $result->execute();
        if($result->rowCount()>=1){
            return $result->fetchAll(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }

    function deleteCategory($id)
    {
        $result = $this->connect->prepare("DELETE FROM tbl_menu WHERE id =?");
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result;
        } else {
            return false;
        }

    }


}