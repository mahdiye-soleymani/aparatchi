<?php


class exitsite extends controller
{
    public function indexAction()
    {
        session_destroy();
        header('location:'.AddressMyWebsite); //برمیگردیم به صفحه اصلی
    }
}