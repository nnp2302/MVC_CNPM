<?php
class AccessaryManage extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('AccessaryManageModel');
    }
    public function list(){
        $title = 'Quản lí phụ tùng';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'Accessarymanage/list';
        $this->data['page']='admin/Accessarymanage';       
        //Lấy thông tin phụ tùng
        $this->data['accessarylist'] = $this->model->getAccessaryList();
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function add(){
        $data = $this->getRequest();
        $this->model->addAccessary($data);
        header('location:'._WEB_ROOT.'/quan-li-phu-tung');
    }

    public function edit(){
        $data = $this->getRequest();
        $this->model->editAccessary($data);
        header('location:'._WEB_ROOT.'/quan-li-phu-tung');
    }

    public function delete(){
        $data = $this->getRequest();
        $this->model->deleteAccessary($data['MaPhuTung']);
        header('location:'._WEB_ROOT.'/quan-li-phu-tung');
    }

    public function search(){
        $result = $this->getRequest();
        $title = 'Quản lí phụ tùng';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'Accessarymanage/list';
        $this->data['page']='admin/Accessarymanage';       
        //Lấy thông tin phụ tùng
        $this->data['accessarylist'] =$this->model->searchAccessary($result['search']);
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function getRequest(){
        $request = new Request();
        return $request->getField();
    }
}