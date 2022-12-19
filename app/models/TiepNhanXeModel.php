<?php
    class TiepNhanXeModel extends Model{
        protected $phieu_bao_duong = 'phieu_bao_duong';
        protected $phieu_tiep_nhan_xe = 'phieu_tiep_nhan_xe';
        protected $danh_gia_tinh_trang_xe = 'danh_gia_tinh_trang_xe';
        public function __construct()
        {
            parent::__construct();
        }

        public function getlist(){
            $data = $this->db->query("CALL LayDanhSachPhieuBaoDuong()")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public function getBD($id){
            $data = $this->db->query("CALL LayThongTinBaoDuong($id)")->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function search($id){
            $sql = "CALL LayPhieuBaoDuong($id)";
            $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public function taoPhieuTiepNhanXe($data=[]){
            if(!empty($data)){
                extract($data);
                $thongtin['mathomaynhanxe'] = $_SESSION['user']['id'];
                $thongtin['tinhtrangphutung'] = -1;
                $this->db->insert($this->phieu_tiep_nhan_xe,$thongtin);
                foreach ($danhgia as $key => $value) {
                    $value['thodanhgia'] = $thongtin['mathomaynhanxe'];
                    $value['thoigiandanhgia'] = date('Y-m-d H:i:s',$value['thoigiandanhgia']/1000);
                    $this->db->insert($this->danh_gia_tinh_trang_xe,$value);
                }
            }
        }
    }
?>