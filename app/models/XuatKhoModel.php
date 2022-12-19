<?php
class XuatKhoModel extends Model{
    private $phieu_tiep_nhan_xe = 'phieu_tiep_nhan_xe';
    private $yeu_cau_phu_tung = 'yeu_cau_phu_tung';
    public function __construct()
    {
        parent::__construct();
    }
    function getList(){
        $sql = "select * from $this->phieu_tiep_nhan_xe where tinhtrangphutung = 0";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function xemDanhSachYeuCau($id){
        $sql = "select * from $this->yeu_cau_phu_tung where MaPhieuTiepNhan = $id";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function xacnhan($id){
        $sql = "update $this->phieu_tiep_nhan_xe set tinhtrangphutung =1 where MaPhieu = '$id'";
        $this->db->query($sql);
    }
}