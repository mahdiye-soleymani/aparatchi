<?php

class listComments extends controller
{
    public function indexAction()
    {
        $listCommentsModel = $this->loadModel('listCommentsModel');
        $this->loadView('admin/commentManage/listComments', array('title' => '.: APARATCHI |لیست پست :.'
        , 'listCommentsModel' => $listCommentsModel
        ));
    }

}