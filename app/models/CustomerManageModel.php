<?php
class CustomerManageModel extends Model
{
    protected $count_user='countuser';
    public function __construct()
    {
        parent::__construct();
    }

    public function getCustomerList()
    {
        $sql = "select * from khachhang";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addCustomer($data)
    {   
        $data['id'] = $this->createcustomerID($this->countKH(),$data['chucvu']);
        $this->db->insert('khachhang',$data);
    }
    public function editCustomer($data)
    {
        $this->db->update('khachhang',$data,"id='".$data['id']."'");
    }
    public function deleteCustomer($id)
    {
        $this->db->delete('khachhang',"id='$id'");
    }
    public function searchCustomer($id){
        $sql = "select * from khachhang where id='$id'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function createcustomerID($id,$chucvu)
    {
        $id++;
        while (strlen($id) < 8) {
            $id = '0' . $id;
        }
        return $chucvu. $id;
    }
    //Đếm số lượng nhân viên
    function countKH()
    {
        $sql = "select KH from $this->count_user where id=1";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        extract($data);
        return $KH;
    }
}