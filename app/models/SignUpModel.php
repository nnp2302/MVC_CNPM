<?php
#Kế thừa từ class Model
class SignUpModel extends Model
{
    protected $user_table = 'khach_hang';
    protected $account_table = 'tai_khoan';
    protected $tham_so = 'tham_so';

    public function __construct()
    {
        parent::__construct();
    }
    //Thêm tài khoản
    public function create($username, $password)
    { 
        if(!$this->isUserExist($username)){      
            $id = $this->createId($this->countKH());
            $data = new TaiKhoan($id,$username,$password);
            $this->db->insert($this->account_table,$data);    
            $this->addUser($id);
            $this->updateKH();
            return true;
        }
        return 'Tài khoản đã tồn tại';
    }
    //Đếm số lượng khách hàng
    function countKH()
    {
        $sql = "select GiaTri from $this->tham_so where MaThamSo='KH'";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data['giatri'];
    }
    //Tạo ID Khách hàng
    function createId($id)
    {
        $id++;
        while (strlen($id) < 8) {
            $id = '0' . $id;
        }
        return 'KH' . $id;
    }
    //Thêm khách hàng
    function addUser($id, $ho = '', $ten = '', $gioitinh = '', $ngaysinh = '', $sdt = '', $email = '', $diachi = '', $loaikh = 'BT')
    {
        $data = new KhachHang($id, $ho, $ten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $loaikh);
        $this->db->insert($this->user_table, $data);
    }
    //Kiểm tra tồn tại khách hàng
    function isUserExist($username)
    {
        $data = $this->db->query("select * from $this->account_table where TenTaiKhoan = '$username'")->fetch(PDO::FETCH_ASSOC);
        return !empty($data);
    }
    public function updateKH(){
        $this->db->query("update $this->tham_so set GiaTri=GiaTri+1 where MaThamSo = 'KH'");  
    }
}
