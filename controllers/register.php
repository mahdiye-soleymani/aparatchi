<?php


class register extends controller
{
    public function indexAction()
    {
        $categorymodel = $this->loadModel('categorymodel');
        $listMenuShow = $categorymodel->listMenuShow();

        $message_error_register = null;
        $message_success_register = null;
        $member_model = $this->loadModel('memberModel');  // فراخوانی مدل مربوط به کاربران از طریق متد والد
        if (isset($_POST['submit_register'])) {  // اگر روی دکمه کلیک شد

            if (!empty($_POST['username_register']) && !empty($_POST['email_register'])
                && !empty($_POST['password_register']) && !empty($_POST['info_register'])
                && !empty($_POST['againpassword_register'])
            ) {
                // خالی نباشد
                if ($member_model->checkemail($_POST['email_register'])) { // بررسی اینکه کاربری با این ایمیل موجود هست یا ن

                    $message_error_register = 'کاربری با این ایمیل در وبسایت ثبت نام کرده است';
                } else {
                    //  ایمیل وارد شده در درون دیتابیس نیست
                    if ($_POST['password_register'] >=3){
                        if ($_POST['password_register'] == $_POST['againpassword_register']) {

                            if ($_POST['captchacode'] == $_SESSION['random_number']) {  //بررسی کدی توی سشن صفحه کپچا  با مقداری که کاربر وارد کرده

                                $emailregister = trim_url(security($_POST['email_register'])); // گرفتن ایمیل و قرار دادن درون یک متغیر
                                $usernameregister = trim_url(security($_POST['username_register'])); // گرفتن یوزر نیم و قرار دادن درون یک متغیر
                                $passwordregister = trim_url(hashpassword($_POST['password_register'])); // گرفتن پسورد و قرار دادن درون یک متغیر
                                $inforegister = trim_url(security($_POST['info_register']));
                                if ($member_model->register($inforegister, $usernameregister, $emailregister, $passwordregister)) {
                                    // اینجا یعنی کاربر با موفقیت توانست در وبسایت ما ثبت نام کند
                                    $message_success_register = 'ثبت نام با موفقیت انجام شد';
                                } else {
                                    $message_error_register = 'ثبت نام دچار مشکل شد لطفا مجدد اقدام نمایید';
                                }


                            } else {
                                $message_error_register = 'کد امنیتی به درستی وارد نشده است';
                            }

                        } else {
                            $message_error_register = 'رمز عبور با تکرار رمز عبور یکسان نمیباشد';
                        }
                    }else{
                        $message_error_register = 'طول پسوورد باید بیشتر از 4 باشد.';
                    }
                }

            } else {
                $message_error_register = 'لطفا اطلاعات خواسته شده را وارد نمایید';
            }
        }

        $this->loadView('user/register/register_index', array('title' => 'ثبت نام در سایت',
            'error' => $message_error_register,
            'success' => $message_success_register
        , 'listMenuShow' => $listMenuShow, 'listSubMenuShow' => $categorymodel
        ));
    }
}