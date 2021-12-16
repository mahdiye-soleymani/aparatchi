<?php


class adminchangepass extends controller
{
    public function indexAction()
    {
        $messageErrorChangePasswordAdmin = null;
        $messageSuccessChangePasswordAdmin = null;
        if (isset($_POST['btnchangepasswordadmin'])) {
            if (isset($_POST['passwordoldadmin']) && isset($_POST['passwordnewadmin1']) && isset($_POST['passwordnewadmin2'])) {
                if (!empty($_POST['passwordoldadmin']) && !empty($_POST['passwordnewadmin1']) && !empty($_POST['passwordnewadmin2'])) {
                    // بررسی میشود مقادیر اینپوت ها خالی نباشد
                    $model_changepassword = $model_changepass = $this->loadModel('adminchangepassModel');  // توسط متهد لود مادل به مادل مورد نظر وصل میشویم
                    $model_changepasswordadmin = $model_changepassword->checkPasswordAdmin(hashpassword($_POST['passwordoldadmin'])); //حالا بعد از وصل شدن به مادل از این طریق به متهد چک پسورد وصل میشویم

                    if ($model_changepasswordadmin) {
                        //در این مرحله پسورد قدیمی با پسوردی که درون دیتابیس ثبت شده است یکسان میباشد

                        if ($_POST['passwordnewadmin1'] == $_POST['passwordnewadmin2']) {
                            // مشخص شد ک تکرار پسورد با پسورد جدید یکسان میباشد
                            $newpass = hashpassword($_POST['passwordnewadmin1']); // اینجا پسورد جدید هش میشود

                            if ($model_changepassword->changePasswordAdmin($newpass)) {
                                // تغییر پسورد با موفقیت انجام شد
                                $messageSuccessChangePasswordAdmin = 'تغییر پسورد با موفقیت انجام شد';
//                                header('location:'.AddressMyWebsite .'adminexit');

                            }
                        } else {
                            $messageErrorChangePasswordAdmin = 'پسورد جدید با تکرار پسورد جدید یکسان نمیباشد';
                        }
                    } else {
                        $messageErrorChangePasswordAdmin = 'پسورد قدیمی با پسوردی که در پایگاه داده ثبت شده است یکسان نمی باشد';
                    }
                } else {
                    $messageErrorChangePasswordAdmin = 'لطفا مقادیر را کامل وارد نمایید';
                }
            }
        }

        $this->loadView('admin/changepassword/changepasswordindex', array('title' => 'تغییر پسورد پنل مدیریت', 'messageErrorChangePasswordAdmin' => $messageErrorChangePasswordAdmin
        , 'messageSuccessChangePasswordAdmin' => $messageSuccessChangePasswordAdmin
        ));
    }
}