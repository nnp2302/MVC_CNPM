<?php 
class HoaDon extends BaseController{
    public function __construct()
    {
        $this->model = $this->model('HoaDonModel');
    }
    public function index($search = []){
        $title ='Xác nhận hóa đơn';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'xac-nhan-hoa-don';
        $this->data['content'] = 'thungan/index';
        $this->data['hoadon'] = $this->model->getHoaDon();
        if(!empty($search)){
            $this->data['hoadon'] = $search;
        }
        $this->render('layouts/client_layout',$this->data);
    }
    public function detail($id){
        $title ='Xác nhận hóa đơn';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'xac-nhan-hoa-don';
        $this->data['content'] = 'thungan/detail';
        $this->data['hoadon'] = $this->model->getHoaDonID($id);
        $this->render('layouts/client_layout',$this->data);
    }
    public function xacnhan(){
        $request = new Request();
        $data = $request->getField();
        $this->model->xacNhanHoaDon($data);
        header('location:'._WEB_ROOT.'/xac-nhan-hoa-don');
    }
}