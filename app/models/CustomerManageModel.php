<?php
class CustomerManageModel extends Model
{
    protected $khach_hang = 'khach_hang';
    protected $tai_khoan = 'tai_khoan';
    protected $tham_so='tham_so';
    public function __construct()
    {
        parent::__construct();
    }
    public function getCustomerList()
    {
        $sql = "select * from $this->khach_hang";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function editCustomer($data)
    {
        // print_r($data);die();
        $this->db->update($this->khach_hang,$data,"MaKhachHang='".$data['MaKhachHang']."'");
    }
    public function deleteCustomer($id)
    {
        $this->db->delete($this->khach_hang,"MaKhachHang='$id'");
        $this->db->delete($this->tai_khoan,"MaNguoiDung='$id'");
    }
    public function searchCustomer($id){
        $sql = "select * from $this->khach_hang where MaKhachHang='$id'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}