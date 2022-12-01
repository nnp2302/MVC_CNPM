<?php
    class TaiKhoan{
        public $iduser,$username,$matkhau;
        public function __construct($iduser,$username,$matkhau)
        {
            $this->iduser=$iduser;
            $this->username=$username;
            $this->matkhau=$matkhau;
        }
    }
?>