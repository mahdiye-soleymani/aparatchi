<?php

class listSlide extends controller
{

    public function indexAction()
    {
        $sliderModel = $this->loadModel('sliderModel');
        $this->loadView('admin/creatslider/listSlide', array('title' => 'لیست اسلاید ها'
        , 'sliderModel' => $sliderModel
        ));

    }

}