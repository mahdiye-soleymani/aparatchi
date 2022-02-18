<?php

class comments extends controller
{
    protected $address = 'http://localhost:81/aparatchi/';
    public function addComments($email,$title,$id)
    {

        $commentsModel = $this->loadModel('commentsModel');
        if (isset($_POST['sendComment'])) {
            if (!empty($_POST['comment_text'])) {
                $commentsModel->sendComments($_POST['comment_text'],$email,$title,$id);
//                header('location:'.$this->address.'afftercomment/show/'.$title,$id);
                $_SESSION['pending']=1;
                header('location:'.$this->address.'postPage/show/'.$id

                );
            } else {

            }
        }

    }

}