<?php

//ویرایش کاربران
class update extends controller
{
    public function memberEdit($id)
    {


        $membermodel = $this->loadModel('memberModel');
        if (isset($_POST['btnupdatemember'])) {

//            $infoupdateregister = trim_url(security($_POST['infoupdateregister']));
//            $emailupdateregister = trim_url(security($_POST['emailupdateregister']));
//            $usernameupdateregister = trim_url(security($_POST['usernameupdateregister']));
            $banmember = trim_url(security($_POST['banmember']));
            if ($membermodel->updatemember($banmember,$id)) {
                header('location:' . AddressMyWebsite . 'adminlistmember');
            }
        }

        $this->loadView('admin/update/memberEdit', array('title' => 'ویرایش کاربر'
        , 'listmemberbyid' => $membermodel->listmemberwithid($id)

        ));
    }
}