<?php

    const AddressMyWebsite = 'http://localhost:81/siteaparatchi/';

    //تابع امنیتی مان
    function security($input)
    {
        return trim(htmlentities($input));
    }

    //برای هش کردن پسورود ها

    function hashpassword($password)
    {

        $salt = 'Ap@raTch!';//بالا بردن امنیت پسوورد
        return crypt($password, $salt);
    }

?>