<?php
//Trang mặc định
    $routes['default_controller'] = 'Home';
    $routes['trang-chu'] = 'Home';
//dang nhap
    $routes['dang-nhap'] = 'SignIn';
    $routes['kiem-tra-dang-nhap']='SignIn/login';
//dang ki
    $routes['dang-ki'] = 'signup';
    $routes['tao-tai-khoan'] = 'signup/create';
//dang xuat
    $routes['dang-xuat'] = 'signout/signout';
//thong tin ca nhan
    $routes['thong-tin-ca-nhan'] ='info/khachhang';
    $routes['thong-tin-nhan-vien'] ='info/nhanvien';
    $routes['cap-nhat-thong-tin'] = 'info/update';
//datlich
    $routes['dat-lich'] = 'booking/index';
    $routes['tao-lich-dat'] = 'booking/booking';
//


//admin
    //quan li nhan vien
    $routes['quan-li-nhan-vien'] = 'admin/staffmanage/list';
    $routes['them-nhan-vien'] = 'admin/staffmanage/add';
    $routes['sua-nhan-vien'] = 'admin/staffmanage/edit';
    $routes['xoa-nhan-vien'] = 'admin/staffmanage/delete';
    //quan li khach hang
    $routes['quan-li-khach-hang'] = 'admin/customermanage/list';
    $routes['them-khach-hang'] = 'admin/customermanage/add';
    $routes['sua-khach-hang'] = 'admin/customermanage/edit';
    $routes['xoa-khach-hang'] = 'admin/customermanage/delete';
    //quan li phu tung
    $routes['quan-li-phu-tung']= 'admin/accessarymanage';
    //quan li dich vu
    $routes['quan-li-dich-vu'] = 'admin/servicemanage';
    //bang dieu khien
    $routes['bang-dieu-khien'] ='admin/dashboard/index';
//nhan vien bao duong
    //lap phieu bao duong
    $routes['lap-phieu-bao-duong'] = 'baoduong/baoduong/index';
    $routes['lap-phieu-bao-duong/(.+)'] = 'baoduong/baoduong/$1';
    $routes['tao-phieu-bao-duong'] = 'baoduong/baoduong/add';
//tho may
    $routes['tiep-nhan-xe'] = 'thomay/TiepNhanXe/list';
    $routes['lap-phieu-tiep-nhan-xe/(.+)'] = 'thomay/TiepNhanXe/detail/$1';
    $routes['tao-phieu-tiep-nhan-xe'] = 'thomay/TiepNhanXe/add';
    $routes['danh-gia-tinh-trang-xe'] = 'thomay/TiepNhanXe/danhgia';