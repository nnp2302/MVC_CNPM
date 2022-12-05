<?php
class Info extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('InfoModel');
    }

    public function khachhang(){
        $title = 'Thông tin cá nhân';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'info/khachhang';
        $this->data['page']='info';        
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function nhanvien(){
        $title = 'Thông tin nhân viên';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'info/nhanvien';
        $this->data['page']='info';
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function update(){ 
        $request = new Request();
        $id = $_SESSION['user']['id'];
        $data = $request->getField();
        $this->model->updateInfo($id,$data);
    }
}