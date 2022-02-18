<?php

class deleteComments  extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function deleteComments($id)
    {
        $listCommentsModel = $this->loadModel('listCommentsModel');
        if ($listCommentsModel->deleteComments($id)) {
            header('location:'.$this->address.'listComments');
        }
    }

}