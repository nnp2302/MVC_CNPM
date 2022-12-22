<?php
class HoaDonModel extends Model{
    private $hoa_don = 'hoa_don';

    public function __construct()
    {
        parent::__construct();
    }

    function getHoaDon(){
        $sql = "select * from $this->hoa_don where TrangThaiThanhToan=-1";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function getHoaDonID($id){
        $sql = "select * from $this->hoa_don where MaHoaDon=$id and TrangThaiThanhToan=-1;";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    function xacNhanHoaDon($data){
        extract($data);
        $sql = "update hoa_don 
                set HinhThucThanhToan = $HinhThucThanhToan,
                    TrangThaiThanhToan = 1
                where MaHoaDon = $MaHoaDon";
        $this->db->query($sql);
    }
}