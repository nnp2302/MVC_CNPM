<?php
//Trang mặc định
$routes['default_controller'] = 'home';
$routes['trang-chu'] = 'home';
$routes['dang-nhap'] = 'signin';
$routes['dang-ki'] = 'signup';
$routes['dang-ki/(.+)/(.+)'] = 'signup/create/$1/$2';
$routes['tao-tai-khoan'] = 'signup/create';
$routes['dashboard/(.+)'] ='admin/dashboard/detail/$1';
//