<?php
    class BaoDuongModel extends Model{
        private $table_lichdat = 'lichdat';
        private $table_phieubd = 'phieubaoduong';
        public function __construct()
        {
            parent::__construct();
        }
        public function search($sdt){
            $data = $this->db->query("select * from $this->table_lichdat where sdt = '$sdt'")->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function taoPhieuBaoDuong($data){
            $data['idnv'] = $_SESSION['user']['id'];
            $data['thoigianlapphieu'] = date('Y-m-d H:i:s');
            $this->db->insert($this->table_phieubd,$data);
        }
    }

?>