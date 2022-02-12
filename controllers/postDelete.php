<?php

class postDelete extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function deletePost($id)
    {
        $listPostModel = $this->loadModel('listPostModel');
        if ($listPostModel->deletePost($id)) {
            header('location:'.$this->address.'listPost');
        }
    }


}