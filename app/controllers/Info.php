<?php
class Info extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('InfoModel');
    }

    public function index(){
        $title = 'Thông tin cá nhân';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'info/index';
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