<?php
class AccessaryManageModel extends Model
{
    protected $tham_so='tham_so';
    protected $phu_tung = 'phu_tung';
    public function __construct()
    {
        parent::__construct();
    }

    public function getAccessaryList()
    {
        $sql = "select * from $this->phu_tung";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addAccessary($data)
    {   
        $data['MaPhuTung'] = $this->createAccessaryID($this->countPT());
        $data['NgayNhap'] = date('Y-m-d H-i-s');
        $data['GiaBan'] = (float)$data['GiaNhap']*1.05;
        $data['Makho'] = 'KHO0000001';
        $this->db->insert($this->phu_tung,$data);
        $this->db->query("update $this->tham_so set GiaTri=GiaTri+1 where MaThamSo = 'PT'");
    }
    public function editAccessary($data)
    {
        $this->db->update($this->phu_tung,$data,"MaPhuTung='".$data['MaPhuTung']."'");
    }
    public function deleteAccessary($id)
    {
        $this->db->delete($this->phu_tung,"MaPhuTung='$id'");
    }
    public function searchAccessary($id){
        $sql = "select * from $this->phu_tung where MaPhuTung='$id'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function createAccessaryID($id)
    {
        $id++;
        while (strlen($id) < 8) {
            $id = '0' . $id;
        }
        return 'PT'. $id;
    }
    //Đếm số lượng phu tung
    function countPT()
    {
        $sql = "select GiaTri from $this->tham_so where MaThamSo = 'PT'";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data['GiaTri'];
    }
}