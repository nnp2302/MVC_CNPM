<?php 
    class CustomerManage extends BaseController{

        public $model;
        public $data = [];
        public function __construct()
        {
            $this->model = $this->model('CustomerManageModel');
        }
        public function list(){
            $title = 'Quản lí khách hàng';
            $this->data['page_title'] = $title;
            $this->data['content'] = 'customermanage/list';
            $this->data['page']='admin/customermanage';       
            //Lấy thông tin khách hàng
            $this->data['customerlist'] = $this->model->getCustomerList();
            //Render layout
            $this->render('layouts/client_layout',$this->data);
        }
        public function add(){
            $data = $this->getRequest();
            $this->model->addCustomer($data);
        }
    
        public function edit(){
            $data = $this->getRequest();
            $this->model->editCustomer($data);
        }
    
        public function delete(){
            $data = $this->getRequest();
            $this->model->deleteCustomer($data['id']);
        }
    
        public function search(){
            $result = $this->getRequest();
            $title = 'Quản lí khách hàng';
            $this->data['page_title'] = $title;
            $this->data['content'] = 'customermanage/list';
            $this->data['page']='admin/customermanage';       
            //Lấy thông tin nhân viên
            $this->data['customerlist'] =$this->model->searchCustomer($result['search']);
            //Render layout
            $this->render('layouts/client_layout',$this->data);
        }
        public function getRequest(){
            $request = new Request();
            return $request->getField();
        }

    }
?>