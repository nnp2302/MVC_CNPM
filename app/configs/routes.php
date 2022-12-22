<?php
//Trang mặc định
    $routes['default_controller'] = 'Home';
    $routes['trang-chu'] = 'Home';
//dang nhap
    $routes['dang-nhap'] = 'SignIn';
    $routes['kiem-tra-dang-nhap']='SignIn/login';
//dang ki
    $routes['dang-ki'] = 'SignUp';
    $routes['tao-tai-khoan'] = 'SignUp/create';
//dang xuat
    $routes['dang-xuat'] = 'SignOut/signout';
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
    $routes['quan-li-nhan-vien'] = 'admin/StaffManage/list';
    $routes['them-nhan-vien'] = 'admin/StaffManage/add';
    $routes['sua-nhan-vien'] = 'admin/StaffManage/edit';
    $routes['xoa-nhan-vien'] = 'admin/StaffManage/delete';
    //quan li khach hang
    $routes['quan-li-khach-hang'] = 'admin/CustomerManage/list';
    $routes['them-khach-hang'] = 'admin/CustomerManage/add';
    $routes['sua-khach-hang'] = 'admin/CustomerManage/edit';
    $routes['xoa-khach-hang'] = 'admin/CustomerManage/delete';
    //quan li phu tung
    $routes['quan-li-phu-tung']= 'admin/AccessaryManage/list';
    $routes['them-phu-tung'] = 'admin/AccessaryManage/add';
    $routes['sua-phu-tung'] = 'admin/AccessaryManage/edit';
    $routes['xoa-phu-tung'] = 'admin/AccessaryManage/delete';
    //quan li dich vu
    $routes['quan-li-dich-vu'] = 'admin/ServiceManage/list';
    $routes['them-dich-vu'] = 'admin/ServiceManage/add';
    $routes['sua-dich-vu'] = 'admin/ServiceManage/edit';
    $routes['xoa-dich-vu'] = 'admin/ServiceManage/delete';

    //bang dieu khien
    $routes['bang-dieu-khien'] ='admin/Dashboard/index';
//nhan vien bao duong
    //lap phieu bao duong
    $routes['lap-phieu-bao-duong'] = 'baoduong/BaoDuong/index';
    $routes['lap-phieu-bao-duong/(.+)'] = 'baoduong/BaoDuong/$1';
    $routes['tao-phieu-bao-duong'] = 'baoduong/BaoDuong/add';
//tho may
    $routes['tiep-nhan-xe'] = 'thomay/TiepNhanXe/list';
    $routes['tiep-nhan-xe/(.+)'] = 'thomay/TiepNhanXe/$1';
    $routes['lap-phieu-tiep-nhan-xe/(.+)'] = 'thomay/TiepNhanXe/detail/$1';
    $routes['tao-phieu-tiep-nhan-xe'] = 'thomay/TiepNhanXe/add';
    //Phieu yeu cau phu tung
    $routes['yeu-cau-phu-tung'] = 'thomay/YeuCauPhuTung';
    $routes['yeu-cau-phu-tung/(.+)'] = 'thomay/YeuCauPhuTung/yeucau/$1';
    $routes['tao-phieu-yeu-cau-phu-tung'] = 'thomay/YeuCauPhuTung/add';
//kho
    $routes['xuat-kho']= 'kho/XuatKho';
    $routes['xuat-kho/(.+)'] = 'kho/XuatKho/read/$1';
    $routes['xac-nhan/(.+)']='kho/XuatKho/xacnhan/$1';
//thungan
    $routes['xac-nhan-hoa-don'] = 'thungan/HoaDon';
    $routes['xac-nhan-hoa-don/(.+)'] = 'thungan/HoaDon/detail/$1';
    $routes['xac-nhan-thanh-toan'] = 'thungan/HoaDon/xacnhan';