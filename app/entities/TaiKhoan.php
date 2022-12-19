<?php
    class TaiKhoan{
        public $MaNguoiDung,$TenTaiKhoan,$MatKhau;
        public function __construct($iduser,$username,$matkhau)
        {
            $this->MaNguoiDung=$iduser;
            $this->TenTaiKhoan=$username;
            $this->MatKhau=$matkhau;
        }
    }
?>