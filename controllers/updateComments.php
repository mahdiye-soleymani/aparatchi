<?php

class updateComments  extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';

    public function updateComments($id)
    {
        $listCommentsModel = $this->loadModel('listCommentsModel');
        if ($listCommentsModel->updateComments($id)) {
            header('location:' . $this->address . 'listComments');
        }
    }
}