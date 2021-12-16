<?php
session_start();  // سشن نوعی از متغیر هست که مقادیر را بین صفحهات مختلف جابجا میکند
header('Content-text:image/png');
$randomnumbers = rand(11111,99999);
$_SESSION['random_number'] = $randomnumbers;
if(isset($_SESSION['random_number'])){
    $text = $_SESSION['random_number'];
    $width = 140;  // طول تصویری که قراره ایجاد بشه
    $height = 40; // ارتفاع تصویری که قراره ایجاد بشه
    $fontsize_textimage =22;  // اندازه فونت نوشته های درون تصویر
     $font = 'captchfont.ttf';  // نام فونت برای استفاده اعداد درون تصویر
     $newimage = imagecreate($width,$height);  // تصویر خودمون رو ایجاد  میکنیم
    $backgroundcolor = imagecolorallocate($newimage,255,255,255); //رنگ نوشته های درون تابع رو مشخص میکنیم
    $textimage_color = imagecolorallocate($newimage,0,0,0); //رنگ نوشته های درون تابع رو مشخص میکنیم

    imagettftext($newimage,$fontsize_textimage,0,25,20,$textimage_color,$font,$text); // این هم تابع نهایی و پاس دادن متغیر هایی ک در بالا ساختیم به تابع نهایی
     imagepng($newimage); // تایین فرمت تصویر ایجاد شده توسط کتابخانه gd
    imagedestroy($newimage);
}
?>