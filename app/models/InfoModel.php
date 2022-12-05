<?php
    class InfoModel extends Model{
        protected $table_khachhang = 'khachhang';
        protected $table_nhanvien = 'nhanvien';     

        public function __construct()
        {
            parent::__construct();
        }
        function updateInfo($id,$data){
            if(substr($id,0,2)=='KH'){               
                $data['ngaysinh'] = date("Y-m-d",strtotime($data['ngaysinh']));
                if($this->db->update($this->table_khachhang,$data,"id='$id'")){
                    $data['id'] = $id;
                    $_SESSION['user']=$data;
                    header('location:'._WEB_ROOT.'/thong-tin-ca-nhan');
                }
            }else{
                if($this->db->update($this->table_nhanvien,$data,"id='$id'")){
                    $data['id'] = $id;
                    $_SESSION['user']=$data;
                    header('location:'._WEB_ROOT.'/thong-tin-nhan-vien');
                }
            }
        }
    }
?>