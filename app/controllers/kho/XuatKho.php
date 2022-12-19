<?php 
    class XuatKho extends BaseController{
        public function __construct()
        {
            $this->model = $this->model('XuatKhoModel');
        }

        public function index(){
            $title ='Xuất kho';
            $this->data['page_title'] = $title;
            $this->data['page'] = 'xuat-kho';
            $this->data['content'] = 'kho/xuatkho/list';
            $this->data['list'] = $this->model->getList();
            $this->render('layouts/client_layout',$this->data);
        }
        function read($id){
            $title ='Xuất kho '.$id;
            $this->data['page_title'] = $title;
            $this->data['page'] = 'xuat-kho';
            $this->data['content'] = 'kho/xuatkho/listyeucau';
            $this->data['list'] = $this->model->xemDanhSachYeuCau($id);
            $this->render('layouts/client_layout',$this->data);
        }
        function xacnhan($id){
            $this->model->xacnhan($id);
            header('location:'._WEB_ROOT.'/xuat-kho');
        }
    }

?>