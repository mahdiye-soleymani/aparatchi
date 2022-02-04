<?php


class deleteSlide extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function deleteSLider($id)
    {
        $sliderModel = $this->loadModel('sliderModel');
        if ($sliderModel->deleteSLider($id)) {
            header('location:'.$this->address.'listSlide');
        }
    }
}