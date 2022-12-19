<?php
    class BaoDuongModel extends Model{
        private $lich_dat = 'lich_dat';
        private $table_phieubd = 'phieu_bao_duong';
        private $khach_hang = 'khach_hang';
        private $dich_vu_sd = 'dich_vu_su_dung';
        public function __construct() 
        {
            parent::__construct();
        }
        public function search($bienso){
            $data = $this->db->query("select * from $this->lich_dat join $this->khach_hang on $this->lich_dat.MaKhachHang = $this->khach_hang.MaKhachHang where BienSo = '$bienso'")->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function taoPhieuBaoDuong($data){
            $data['thongtin']['MaNhanVienBaoDuong'] = $_SESSION['user']['id'];
            $data['thongtin']['thoigianlapphieu'] = date('Y-m-d H:i:s');
            
            $id = $this->db->insertReturnLast($this->table_phieubd,$data['thongtin']);
            if(!empty($data['dichvu'])){

                for ($i=0; $i < count($data['dichvu']); $i++) { 
                    $data['dichvu'][$i]['MaPhieuBaoDuong'] = $id;
                }
                print_r($data['dichvu']);
                $this->db->insertMulti($this->dich_vu_sd,$data['dichvu']);
            }
        }
    }

?>