<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '../tools/jdf.php'; // فراخوانی فایل شمسی کردن تاریخ
    const AddressMyWebsite = 'http://localhost:81/aparatchi/';
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
    //تاریخ شمسی
    function shamsi($time)
    {
        $result = explode(' ', $time);
        list($year, $mon, $day) = explode('-', $result[0]);
        list($hour, $min, $sec) = explode(':', $result[1]);
        $time_stamp=mktime($hour,$min,$sec, $mon, $day,$year);
        return jdate('Y-m-d H:i:s',$time_stamp);
    }
?>