<?php

class deleteMenu extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function deletemenu($id)
    {
        $categorymodel =$this->loadModel('categorymodel');
        if ($categorymodel->deleteCategory($id)) {
            // اگر توانست کاربر را حذف کند
            header('location:'.$this->address.'listCategory');
        }
    }
}