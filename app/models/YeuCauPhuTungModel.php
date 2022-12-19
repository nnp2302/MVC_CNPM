<?php 
class YeuCauPhuTungModel extends Model{
    protected $phieu_tiep_nhan_xe = 'phieu_tiep_nhan_xe';
    protected $yeu_cau_phu_tung = 'yeu_cau_phu_tung';
    public function __construct()
    {
        parent::__construct();
    }

    public function LayDanhSachTiepNhanXe(){
        $MaThoMay = $_SESSION['user']['id'];
        $sql ="select * from $this->phieu_tiep_nhan_xe where MaThoMayNhanXe = '$MaThoMay'";
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function ThemYeuCauPhuTung($data){
        $this->db->insertMulti($this->yeu_cau_phu_tung,$data);
        $this->db->query("update $this->phieu_tiep_nhan_xe set tinhtrangphutung = 0 where maphieu = '".$data[0]['maphieutiepnhan']."'");
    }
}