<?php

class listCategory extends controller
{
    public function indexAction()
    {
        $categorymodel =$this->loadModel('categorymodel');
        $this->loadView('admin/category/listCategory', array('title' => '.: APARATCHI | لیست دسته بندی ها :.'
        ,'categorymodel'=>$categorymodel
        ));
    }
}