<?php

class postEdit extends controller
{
    public function postsEdit($id)
    {


        $listPostModel = $this->loadModel('listPostModel');
        if (isset($_POST['btnEditPost'])) {
            $picname = $_FILES['file_upload']['name'];
            $tmp_pic = $_FILES['file_upload']['tmp_name'];
            $exp = explode('.', $picname);
            $passwand = end($exp);
            if (in_array($passwand, array('png', 'jpeg', 'jpg'))) {
                $newName = rand(1, 200) . 'picPost' . '.' . $passwand;
                move_uploaded_file($tmp_pic, 'public/admin/img/post/' . $newName);
            }
            $titlePost = trim_url(security($_POST['titlePost']));
            $content = trim_url(security($_POST['content']));
            if ($listPostModel->updatePost($titlePost, $newName, $content,$id)) {
                header('location:' . AddressMyWebsite . 'listPost');
            }
        }

        $this->loadView('admin/postManage/postEdit', array('title' => 'ویرایش پست'
        , 'listPostByid' => $listPostModel->listPostByid($id)

        ));
    }
}