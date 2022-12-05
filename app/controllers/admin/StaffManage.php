<?php
class StaffManage extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('StaffManageModel');
    }
    public function list(){
        $title = 'Quản lí nhân viên';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'staffmanage/list';
        $this->data['page']='admin/staffmanage';       
        //Lấy thông tin nhân viên
        $this->data['stafflist'] = $this->model->getStaffList();
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function add(){
        $data = $this->getRequest();
        $this->model->addStaff($data);
    }

    public function edit(){
        $data = $this->getRequest();
        $this->model->editStaff($data);
    }

    public function delete(){
        $data = $this->getRequest();
        $this->model->deleteStaff($data['id']);
    }

    public function search(){
        $result = $this->getRequest();
        $title = 'Quản lí nhân viên';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'staffmanage/list';
        $this->data['page']='admin/staffmanage';       
        //Lấy thông tin nhân viên
        $this->data['stafflist'] =$this->model->searchStaff($result['search']);
        //Render layout
        $this->render('layouts/client_layout',$this->data);
    }
    public function getRequest(){
        $request = new Request();
        return $request->getField();
    }
}