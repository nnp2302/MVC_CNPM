<?php
class Booking extends BaseController{

    public function __construct()
    {
        $this->model = $this->model('BookingModel');
    }
    public function index(){
        $title ='Đặt lịch';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'booking';
        $this->data['content'] = 'booking/index';
        $this->render('layouts/client_layout',$this->data);
    }
    public function booking(){
        $request = new Request();
        $data = $request->getField();
        $result = $this->model->datlich($data);
    }
    public function search(){
        $idkh = $_SESSION['user']['id'];
        $request = new Request();
        $data = $request->getField();
        if(isset($data['booking'])){ 
            $result['search'] = $this->model->timkiem($idkh,$data['booking']);
        }
        $title ='Tra cứu lịch đặt';
        $result['page_title'] = $title;
        $result['page'] = 'booking';
        $result['content'] = 'booking/search';
        $this->render('layouts/client_layout',$result);
    }
}