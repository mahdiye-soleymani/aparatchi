<?php


class exitsite extends controller
{
    public function indexAction()
    {
        session_destroy();  // سشن رو از بین میبره
        header('location:'.AddressMyWebsite); // میگیم برو به صفحه ادمین لاگین
    }
}