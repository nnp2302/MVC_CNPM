<?php
//Trang mặc định
$routes['default_controller'] = 'home';
$routes['trang-chu'] = 'home';
$routes['dang-nhap'] = 'signin';
$routes['dang-ki'] = 'signup';
// $routes['dang-ki/(.+)/(.+)'] = 'signup/create/$1/$2';
$routes['tao-tai-khoan'] = 'signup/create';
$routes['kiem-tra-dang-nhap']='signin/login';
$routes['dashboard/(.+)'] ='admin/dashboard/detail/$1';
$routes['thong-tin-ca-nhan'] ='info/index';
$routes['cap-nhat-thong-tin'] = 'info/update';
$routes['dang-xuat'] = 'signout/signout';
$routes['dat-lich'] = 'booking/index';
$routes['tao-lich-dat'] = 'booking/booking';
//