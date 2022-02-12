<?php

class newsDelete extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function deleteNews($id)
    {
        $listNewsModel = $this->loadModel('listNewsModel');
        if ($listNewsModel->deleteNews($id)) {
            header('location:'.$this->address.'listNews');
        }
    }

}