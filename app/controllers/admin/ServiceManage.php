<?php
class ServiceManage extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('ServiceManageModel');
    }
    public function list(){
        $title = 'Quản lí dịch vụ';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'Servicemanage/list';
        $this->data['page']='admin/Servicemanage';       
        //Lấy thông tin dịch vụ
        $this->data['servicelist'] = $this->model->getServiceList();
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function add(){
        $data = $this->getRequest();
        $this->model->addService($data);
        header('location:'._WEB_ROOT.'/quan-li-dich-vu');
    }

    public function edit(){
        $data = $this->getRequest();
        $this->model->editService($data);
        header('location:'._WEB_ROOT.'/quan-li-dich-vu');
    }

    public function delete(){
        $data = $this->getRequest();
        $this->model->deleteService($data['MaDichVu']);
        header('location:'._WEB_ROOT.'/quan-li-dich-vu');
    }

    public function search(){
        $result = $this->getRequest();
        $title = 'Quản lí dịch vụ';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'Servicemanage/list';
        $this->data['page']='admin/Servicemanage';       
        //Lấy thông tin dịch vụ
        $this->data['servicelist'] =$this->model->searchService($result['search']);
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function getRequest(){
        $request = new Request();
        return $request->getField();
    }
}