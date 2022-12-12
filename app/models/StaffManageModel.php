<?php
class StaffManageModel extends Model
{
    protected $count_user='countuser';
    public function __construct()
    {
        parent::__construct();
    }

    public function getStaffList()
    {
        $sql = "select * from nhanvien";
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addStaff($data)
    {   
        $data['id'] = $this->createStaffID($this->countNV(),$data['chucvu']);
        $this->db->insert('nhanvien',$data);
        $taikhoan['iduser']=$data['id'];
        $taikhoan['username']=$data['id'];
        $taikhoan['matkhau']=1;
        $this->db->insert('taikhoan',$taikhoan);
        $this->db->query("update countuser set NV=NV+1");
    }
    public function editStaff($data)
    {
        $this->db->update('nhanvien',$data,"id='".$data['id']."'");
    }
    public function deleteStaff($id)
    {
        $this->db->delete('taikhoan',"iduser='$id'");
        $this->db->delete('nhanvien',"id='$id'");
    }
    public function searchStaff($id){
        $sql = "select * from nhanvien where id='$id'";
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
        $sql = "select NV from $this->count_user where id=1";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        extract($data);
        return $NV;
    }
}
