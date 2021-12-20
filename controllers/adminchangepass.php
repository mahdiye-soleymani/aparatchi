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
                    // خالی نباشد
                    $model_changepassword = $model_changepass = $this->loadModel('adminchangepassModel');  // توسط متد لود مدل به مدل مورد نظر وصل میشویم
                    $model_changepasswordadmin = $model_changepassword->checkPasswordAdmin(hashpassword($_POST['passwordoldadmin'])); //به متد چک پسورد وصل میشویم

                    if ($model_changepasswordadmin) {
                        //اگه پسورد قدیمی با پسوردی که درون دیتابیس ثبت شده است یکسان بود
                        if ($_POST['passwordnewadmin1'] == $_POST['passwordnewadmin2']) {
                            // اگه تکرار پسورد با پسورد جدید یکسان بود
                            $newpass = hashpassword($_POST['passwordnewadmin1']); //  هش پسورد جدید

                            if ($model_changepassword->changePasswordAdmin($newpass)) {

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