<?php

const AddressMyWebsite = 'http://localhost/aparatchi/';

//تابع امنیتی مان
function security($vorodi)
{
    return htmlentities($vorodi);
}

//برای هش کردن پسورود ها

function hashpassword($password){

    $salt='Ap@raTch!';//بالا بردن امنیت پسوورد
return crypt($password,$salt);
}
?>