<?php

class newsEdit extends controller
{
    public function newsEdit($id)
    {


        $listNewsModel = $this->loadModel('listNewsModel');
        if (isset($_POST['btnEditNews'])) {
            $picname = $_FILES['file_upload']['name'];
            $tmp_pic = $_FILES['file_upload']['tmp_name'];
            $exp = explode('.', $picname);
            $passwand = end($exp);
            if (in_array($passwand, array('png', 'jpeg', 'jpg'))) {
                $newName = rand(1, 200) . 'picNews' . '.' . $passwand;
                move_uploaded_file($tmp_pic, 'public/admin/img/news/' . $newName);
            }
            $titleNews = trim_url(security($_POST['titleNews']));
            $content = trim_url(security($_POST['content']));
            if ($listNewsModel->updatePost($titleNews, $newName, $content, $id)) {
                header('location:' . AddressMyWebsite . 'listNews');
            }
        }

        $this->loadView('admin/NewsManage/NewsEdit', array('title' => 'ویرایش پست'
        , 'listNewsByid' => $listNewsModel->listNewsByid($id)

        ));
    }
}