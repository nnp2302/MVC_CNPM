<?php
class BaoDuong extends BaseController{

    public function __construct()
    {
        $this->model = $this->model('BaoDuongModel');
    }
    public function index($search =[]){
        $title ='Bảo dưỡng';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'lap-phieu-bao-duong';
        $this->data['content'] = 'baoduong/index';
        $this->data['search'] = $search;
        $this->render('layouts/client_layout',$this->data);
    }
    
    public function search(){
        $request = new Request();
        $data = $request->getField();
        if(!empty($data['search'])){
            $data = $this->model->search($data['search']);
        }
        $this->index($data);

    }
    public function add(){
        $request = new Request();
        $data = $request->getField();
        $this->model->taoPhieuBaoDuong($data);
        header('location: '._WEB_ROOT.'/lap-phieu-bao-duong');
    }
}