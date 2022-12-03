<?php
class SignIn extends BaseController{
    public $model;
    public $data =[];
    public function __construct()
    {
        $this->model = $this->model('SignInModel');
    }
    public function index($message=''){
        $title ='Đăng nhập';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'signin/index';
        if(!empty($message)){
            $this->data['message']=$message;
        }
        $this->render('layouts/account_layout',$this->data);
    }
    public function login(){
        $request = new Request();
        $data = $request->getField();
        extract($data);
        
        $isCompleted = $this->model->login($username,$password);

        if(is_array($isCompleted)){
            $_SESSION['user']=$isCompleted;
            header('location:'._WEB_ROOT.'/thong-tin-ca-nhan');
        }else{
            $this->index($isCompleted);
        }
    }
}