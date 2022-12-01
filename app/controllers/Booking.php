<?php
class Booking extends BaseController{

    public function __construct()
    {
        $this->model = $this->model('BookingModel');
    }
    public function index(){
        $title ='Đặt lịch';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'booking/index';
        $this->render('layouts/account_layout',$this->data);
    }
}