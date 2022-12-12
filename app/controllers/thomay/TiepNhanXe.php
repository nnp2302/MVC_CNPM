<?php
class TiepNhanXe extends BaseController{

    public function __construct()
    {
        $this->model = $this->model('TiepNhanXeModel');
    }
    public function list($search =[]){
        $title ='Danh sách phiếu bảo dưỡng';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'tiep-nhan-xe';
        $this->data['content'] = 'thomay/list';
        $this->data['search'] = $search;
        $this->data['phieubaoduong'] = $this->model->getList();
        $this->render('layouts/client_layout',$this->data);
    }
    public function search(){
        $request = new Request();
        $data = $request->getField();
        print_r($data) and die();
        if(!empty($data['search'])){
            $data = $this->model->search($data['search']);
        }
        $this->list($data);
    }
    public function add(){
        $request = new Request();
        $data = $request->getField();
        $this->model->taoPhieuBaoDuong($data);
    }
    public function danhgia(){
        $request = new Request();
        $data = $request->getField();
        $this->model->danhgia($data);
    }
    public function detail($id){
        $title ='Lập phiếu tiếp nhận xe';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'lap-phieu-tiep-nhan-xe';
        $this->data['content'] = 'thomay/detail';
        $this->data['phieubaoduong'] = $this->model->getBD($id);
        $this->render('layouts/client_layout',$this->data);
    }
}