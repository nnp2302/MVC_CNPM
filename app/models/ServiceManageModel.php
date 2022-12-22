<?php
class ServiceManageModel extends Model
{
    protected $tham_so='tham_so';
    protected $dich_vu = 'dich_vu';
    public function __construct()
    {
        parent::__construct();
    }

    public function getServiceList()
    {
        $sql = "select * from $this->dich_vu";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addService($data)
    {   
        $data['MaDichVu'] = $this->createServiceID($this->countDV());
        $this->db->insert($this->dich_vu,$data);
        $this->db->query("update $this->tham_so set GiaTri=GiaTri+1 where MaThamSo = 'DV'");
    }
    public function editService($data)
    {
        $this->db->update($this->dich_vu,$data,"MaDichVu='".$data['MaDichVu']."'");
    }
    public function deleteService($id)
    {
        $this->db->delete($this->dich_vu,"MaDichVu='$id'");
    }
    public function searchService($id){
        $sql = "select * from $this->dich_vu where MaDichVu='$id'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function createServiceID($id)
    {
        $id++;
        while (strlen($id) < 8) {
            $id = '0' . $id;
        }
        return 'DV'. $id;
    }
    //Đếm số lượng phu tung
    function countDV()
    {
        $sql = "select GiaTri from $this->tham_so where MaThamSo = 'DV'";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data['GiaTri'];
    }
}