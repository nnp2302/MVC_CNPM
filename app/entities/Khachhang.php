<?php
    class KhachHang{
    public $makhachhang,$ho,$ten,$gioitinh,$ngaysinh,$sdt,$email,$diachi,$loaikh;
        function __construct($id,$ho,$ten,$gioitinh,$ngaysinh,$sdt,$email,$diachi,$loaikh)
        {
            $this->makhachhang=$id;
            $this->ho=$ho;
            $this->ten=$ten;
            $this->gioitinh=$gioitinh;
            $this->ngaysinh=$ngaysinh;
            $this->sdt=$sdt;
            $this->email=$email;
            $this->diachi=$diachi;
            $this->loaikh=$loaikh;
        }
    }
?>