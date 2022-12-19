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
        $this->data['phieubaoduong'] = $this->model->getList();
        if(!empty($search)){
            $this->data['phieubaoduong'] = $search;
        }
        $this->render('layouts/client_layout',$this->data);
    }
    public function search(){
        $request = new Request();
        $data = $request->getField();
        $search = $this->model->search($data['search']);
        $this->list($search);
    }
    public function add(){
        $request = new Request();
        $data = $request->getField();
        $this->model->taoPhieuTiepNhanXe($data);
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