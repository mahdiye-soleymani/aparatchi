<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/1/20
 * Time: 12:23 PM
 */

class shopping extends controller
{
    public function indexAction()
    {
        $this->loadView('',array('title'=>'سبد خرید ما'));
    }
}