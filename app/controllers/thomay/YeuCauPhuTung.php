<?php
    class YeuCauPhuTung extends BaseController{
        public function __construct()
        {
            $this->model = $this->model('YeuCauPhuTungModel');
        }

        function index(){
            $title ='Yêu cầu phụ tùng';
            $this->data['page_title'] = $title;
            $this->data['page'] = 'yeu-cau-phu-tung';
            $this->data['content'] = 'thomay/yeucau/phutung';
            $this->data['list']= $this->model->LayDanhSachTiepNhanXe();
            $this->render('layouts/client_layout',$this->data);
        }
        function add(){
            $request = new Request();
            $data = $request->getField();
            $this->model->ThemYeuCauPhuTung($data['yeucau']);
        }
        public function yeucau($id){
            $title ='Yêu cầu phụ tùng '.$id;
            $this->data['page_title'] = $title;
            $this->data['page'] = 'yeu-cau-phu-tung';
            $this->data['content'] = 'thomay/yeucau/detail';
            $this->data['id']=$id;
            $this->render('layouts/client_layout',$this->data);
        }
    }
?>