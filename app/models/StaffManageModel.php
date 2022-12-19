<?php
class StaffManageModel extends Model
{
    protected $tham_so='tham_so';
    protected $nhan_vien = 'nhan_vien';
    protected $tai_khoan = 'tai_khoan';
    public function __construct()
    {
        parent::__construct();
    }

    public function getStaffList()
    {
        $sql = "select * from $this->nhan_vien";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addStaff($data)
    {   
        $data['MaNhanVien'] = $this->createStaffID($this->countNV(),$data['ChucVu']);
        $this->db->insert($this->nhan_vien,$data);
        $taikhoan['MaNguoiDung']=$data['id'];
        $taikhoan['TenTaiKhoan']=$data['id'];
        $taikhoan['MatKhau']=1;
        $this->db->insert($this->tai_khoan,$taikhoan);
        $this->db->query("update $this->tham_so set GiaTri=GiaTri+1 where MaThamSo = 'NV'");
    }
    public function editStaff($data)
    {
        $this->db->update($this->nhan_vien,$data,"id='".$data['id']."'");
    }
    public function deleteStaff($id)
    {
        $this->db->delete($this->nhan_vien,"MaNhanVien='$id'");
        $this->db->delete($this->tai_khoan,"MaNguoiDung='$id'");
    }
    public function searchStaff($id){
        $sql = "select * from $this->nhan_vien where MaNhanVien='$id'";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function createStaffID($id,$chucvu)
    {
        $id++;
        while (strlen($id) < 8) {
            $id = '0' . $id;
        }
        return $chucvu. $id;
    }
    //Đếm số lượng nhân viên
    function countNV()
    {
        $sql = "select GiaTri from $this->tham_so where MaThamSo = 'NV'";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data['GiaTri'];
    }
}
