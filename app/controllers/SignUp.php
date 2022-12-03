<?php
class SignUp extends BaseController{
    public $model;
    public $data =[];
    public function __construct()
    {
        $this->model = $this->model('SignUpModel');
    }
    public function index($message=''){
        $title ='Đăng kí';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'signup/index';
        if(!empty($message)){
            $this->data['message']=$message;
        }
        $this->render('layouts/account_layout',$this->data);
    }
    public function create(){
        $request = new Request();
        $data = $request->getField();
        extract($data);
        $isSuccess = $this->model->create($username,$password);
        if(!is_bool($isSuccess)){
            $this->index($isSuccess);
        }else{
            header('location:'._WEB_ROOT.'/dang-nhap');
        }
    }
}