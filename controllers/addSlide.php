<?php

class addSlide extends controller
{

    public function indexAction()
    {
        $sliderModel = $this->loadModel('sliderModel');
        if (isset($_POST['btnslider'])) {
            $sliderModel->addSlider();

        }

        $this->loadView('admin/creatslider/addSlide', array('title' => '.: APARATCHI |اضافه کردن اسلاید :.'));

    }

}

