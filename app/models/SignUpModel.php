<?php
#Kế thừa từ class Model
class SignUpModel extends Model
{
    protected $user_table = 'khachhang';
    protected $account_table = 'taikhoan';
    protected $count_user = 'countuser';

    public function __construct()
    {
        parent::__construct();
    }
    //Thêm tài khoản
    public function create($username, $password)
    {
        if(!$this->isUserExist($username)){           
            $id = $this->createId($this->countKH());
            echo $id;
            $this->addUser($id);
            $data = new TaiKhoan($id,$username,$password);
            $this->db->insert($this->account_table,$data);
            $this->updateKH();
        }
    }
    //Đếm số lượng khách hàng
    function countKH()
    {
        $sql = "select KH from $this->count_user where id=1";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        extract($data);
        return $KH;
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
        $data = $this->db->query("select * from $this->account_table where username = '$username'")->fetch(PDO::FETCH_ASSOC);
        print_r($data);
        return !empty($data);
    }
    public function updateKH(){
        $this->db->query("update $this->count_user set KH=KH+1");  
    }
}
