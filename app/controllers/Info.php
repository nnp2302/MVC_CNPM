<?php
class Info extends BaseController{
    public $model;
    public $data = [];
    public function __construct()
    {
        $this->model = $this->model('InfoModel');
    }

    public function index(){
        // $data = $this->model->getList();
        $title = 'Trang chủ';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'home/index';

        //Render layout
        $this->render('layouts/index_layout',$this->data);
    }
}