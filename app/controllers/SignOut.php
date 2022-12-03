<?php
class SignOut extends BaseController{
    public function signout(){
        session_destroy();
        header('location:'._WEB_ROOT.'/dang-nhap');
    }
}