<?php

class sliderModel extends database
{


    function addSlider()
    {
//        یک نام جدید رندوم درست میکنیم و در پوشه img  مان ذخیره میکنیم .
        if (isset($_POST['btnPost'])) {
            if (isset($_POST['btnslider'])) {
                $file = $_FILES['file_upload'];
                $filename = $file['name'];
                $filetmp = $file['tmp_name'];
                $exp = explode('.', $filename);
                $passwand = end($exp);
//            پسوند های مجاز
                if (in_array($passwand, array('png', 'jpg', 'jpeg'))) {
                    $newname = 'sliderpic' . rand(1, 1000) . '.' . $passwand;
                    move_uploaded_file($filetmp, 'public/admin/img/' . $newname);
                    $result = $this->connect->prepare('INSERT INTO `tbl_slider` SET `slidename`=?');
                    $result->bindValue(1, $newname);
                    $result->execute();
                    header('location:addSlide?addSlide=success');
                } else {
                    header('location:addSlide?addSlide=error');
                }

            }
        }
    }

    function listSlider()
    {
        $result = $this->connect->prepare('SELECT * FROM tbl_slider');
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }


    function deleteSLider($id)
    {
        $result = $this->connect->prepare('DELETE FROM tbl_slider WHERE id=?');
        $result->bindValue(1, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result;
        } else {
            return false;
        }
    }


}


