<?php
//روتر

class proccess
{
    private $controller;
    private $explode;
    private $method;
    private $location;
    private $obj;

    public function __construct()
    {
        if (isset($_GET['aparatchi'])) {

            $url = rtrim($_GET['aparatchi'], '/');
            $this->explode = $this->explodeUrl($url);
            $this->setController(); // فراخوانی متد ست کنترلر
            $this->setMethod(); //فراخوانی متد ست متد
            $this->sortArray();// فراخوانی متد مرتب سازی ارایه یعنی مرتب سازی شروع خانه های ارایه
            $this->location = 'controllers/' . $this->controller . '.php';  // مسیر کنترلر را معرفی میکنیم
            $this->createObject();  // ایجاد یک نمونه از روی کنترلری که کاربر وارد میکند
            $this->checkMethod(); // بررسی اینکه ایا متد مورد نظر درون کنتلر میباشد یا ن
            $this->proccessApp(); // در اینجا هم محتوای موجود در متد درون کنترلر اجرا خواهد شد

        } else {

            $this->controller = 'aparatchi';
            $this->method = 'indexAction';
            $this->explode = array();
            $this->location = 'controllers/' . $this->controller . '.php';  // مسیر کنترلر را معرفی میکنیم
            $this->createObject();  // ایجاد یک نمونه از روی کنترلری که کاربر وارد میکند
            $this->checkMethod(); // بررسی اینکه ایا متد مورد نظر درون کنتلر میباشد یا ن
            $this->proccessApp(); // محتوای موجود در متد درون کنترلر اجرا خواهد شد

//            return false;
        }
    }


    public function explodeUrl($url)
    {
        //در این متد ما یک ورودی میگیریم و ورودی رو بر حسب یک اسلش تکه تکه میکنیم و درواقع خروجی ارایه میباشد
        return explode('/', $url);
    }

    public function setController()
    {

        if ($this->explode[0] == 'index.php' || $this->explode[0] == '')  {
            $this->controller = 'aparatchi'; //مقدار پیشفرض رو برابر ایندکس قرار بده
        } else {
            // اومدیم و کنترلر رو تشخیص دادیم و ریختیم درون پراپرتی کنترلر
            $this->controller = $this->explode[0];
            unset($this->explode[0]); // در واقع حالا خونه صفرم ارایه رو بعد از ریختن درون پراپرتی کنترلر که در بالا مشاهده میکنید حذف کرده ایم
        }
    }

    public function setMethod()
    {
        if (isset($this->explode[1])) {
            $this->method = $this->explode[1];
            unset($this->explode[1]); // حذف کردن خونه یکم از ارایه
        } else {
            $this->method = 'indexAction';
        }
    }

    public function sortArray()
    {
        // مرتب سازی ارایه ها
        $this->explode = array_values($this->explode);
    }

    public function createObject()
    {
        if (file_exists($this->location)) {
            require_once $this->location; //فراخوانی کنترلر
            $this->obj = new $this->controller; // یک نمونه از روی کنترلر خود میسازیم
            return $this->obj;
        } else {
            return false;
        }
    }


    public function checkMethod()
    {
        // بررسی میکنیم ببینیم متدی که کاربر در مرورگر وارد کرده داخل کنترلر وجود دارد یا ن
        if (method_exists($this->obj, $this->method)) {
            return true;
        } else {
            return false;
        }
    }

    public function proccessApp()
    {
        call_user_func_array(array($this->obj, $this->method), $this->explode);
    }


}


$object = new proccess(); //یک نمونه از روی کلاس ساخته ایم

?>