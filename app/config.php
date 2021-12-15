<?php

    const AddressMyWebsite = 'http://localhost:81/siteaparatchi/';

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

        $salt = 'Ap@raTch!';//بالا بردن امنیت پسوورد
        return crypt($password, $salt);
    }


    function random_token()
    {
        return md5((uniqid(rand())));
    }
?>