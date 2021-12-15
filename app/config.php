<?php

    const AddressMyWebsite = 'http://localhost:81/siteaparatchi/';
    if (!isset($_SESSION)) {
        // چک میشود اگر سشن در پروژه ما استارت نشده بود سشن را استارت میکند
        session_start();
    }
    ob_start();  // حل مشکل عدم هدر کردن در مواقعی که سشن را بررسی میکنیم


    //تابع امنیتی مان
    function security($input)
    {
        return htmlentities($input);
    }

    function trim_url($url)
    {
        return trim($url);
    }

    //برای هش کردن پسورود ها

    function hashpassword($password)
    {

        $salt = 'ApraTch!';//بالا بردن امنیت پسوورد
        return crypt($password, $salt);
    }


    function random_token()
    {
        return md5((uniqid(rand())));
    }
?>