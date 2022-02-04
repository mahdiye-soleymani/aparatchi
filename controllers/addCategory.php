<?php

class addCategory extends controller
{

    public function indexAction()
    {
        $categorymodel = $this->loadModel('categorymodel');
        if (isset($_POST['btnNewMenu'])) {
            $categorymodel->addCategory($_POST['titleMenu'],$_POST['menuOption']);

        }
        if (isset($_POST['btnNewSubMenu'])) {
            $categorymodel->subMenu($_POST['titleSubMenu'],$_POST['menuOptionForSub'],100);


        }
        $this->loadView('admin/category/addCategory', array('title' => '.: APARATCHI |اضافه کردن دسته بندی :.','listCategory'=>$categorymodel->listCategory()));
    }
}