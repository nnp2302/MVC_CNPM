<?php
class SignIn extends BaseController{
    public $model;
    public $data =[];
    public function __construct()
    {
        $this->model = $this->model('SignInModel');
    }
    public function index(){
        $title ='Đăng nhập';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'signin/index';
        $this->render('layouts/account_layout',$this->data)
    }
}