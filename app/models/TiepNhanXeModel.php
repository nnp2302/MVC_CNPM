<?php
    class TiepNhanXeModel extends Model{
        public function __construct()
        {
            parent::__construct();
        }

        public function getlist(){
            $data = $this->db->query("select * from phieubaoduong")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public function getBD($id){
            $data = $this->db->query("select * from phieubaoduong where id=$id")->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function taoPhieuBaoDuong(){
            print_r($_POST);
        }
        public function danhgia($data=[]){
            $this->db->insertMulti('danhgia',$data['danhgia']);
        }
    }
?>