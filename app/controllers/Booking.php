<?php
class Booking extends BaseController{

    public function __construct()
    {
        $this->model = $this->model('BookingModel');
    }
    public function index($message = ''){
        $title ='Đặt lịch';
        $this->data['page_title'] = $title;
        $this->data['page'] = 'booking';
        if(!empty($message)){
            $this->data['message'] = $message;
        }
        $this->data['content'] = 'booking/index';
        $this->render('layouts/client_layout',$this->data);
    }
    public function booking(){
        $request = new Request();
        $data = $request->getField();
        $result = $this->model->datlich($data);
        $this->index($result);
    }
    public function search(){
        $idkh = $_SESSION['user']['id'];
        $request = new Request();
        $data = $request->getField();
        if(isset($data['search'])){ 
            $result['search'] = $this->model->timkiem($idkh,$data['search']);
        }
        $title ='Tra cứu lịch đặt';
        $result['page_title'] = $title;
        $result['page'] = 'booking';
        $result['content'] = 'booking/search';
        $this->render('layouts/client_layout',$result);
    }
}