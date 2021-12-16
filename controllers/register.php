<?php


class register extends controller
{
    public function indexAction()
    {
        $message_error_register = null;
        $message_success_register = null;
        $member_model = $this->loadModel('memberModel');  // فراخوانی مادل مربوط به کاربران از طریق متهد والد
        if (isset($_POST['submit_register'])) {  // اگر روی دکمه کلیک شد
            if (!empty($_POST['username_register']) && !empty($_POST['email_register']) && !empty($_POST['password_register']) && !empty($_POST['info_register'])
                && !empty($_POST['againpassword_register'])
            ) {
                // در کد بالا بررسی میکنیم که مقادیر اینپوت ها خالی نباشد

                if ($member_model->checkemail($_POST['email_register'])) { // بررسی اینکه کاربری با این ایمیل موجود هست یا ن
                    // یعنی کاربری با این ایمیل در درون وبسایت هست و باید هشدار دهیم
                    $message_error_register = 'کاربری با این ایمیل در وبسایت ثبت نام کرده است';
                } else {
                    // در اینجا متوجه میشویم که ایمیل وارد شده در درون دیتابیس نمیباشد

                    if ($_POST['password_register'] == $_POST['againpassword_register']) {

                        if($_POST['captchacode'] ==$_SESSION['random_number']){  //بررسی کدی که درون سشن ایجاد شده در صفحه کپچا هست با مقداری که کاربر در درون اینپوت مربوط به کد امنیتی میزند یکسان میباشد یا ن


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


                        }else{
                            $message_error_register ='کد امنیتی به درستی وارد نشده است';
                        }

                    } else {
                        $message_error_register = 'رمز عبور با تکرار رمز عبور یکسان نمیباشد';
                    }

                }

            } else {
                $message_error_register = 'لطفا اطلاعات خواسته شده را وارد نمایید';
            }
        }
        $this->loadView('user/register/register_index', array('title' => 'ثبت نام در سایت',
            'error' => $message_error_register,
            'success' => $message_success_register

        ));
    }
}