<?php
#Kế thừa từ class Model
class SignInModel extends Model{
    protected $khTable = 'khachhang';
    protected $nvTable = 'nhanvien';
    protected $accountTable = 'taikhoan';
    protected $countUser = 'countuser';
    public function __construct()
    {
        parent::__construct();
    }
    public function login($username,$password){
        if($this->checkExistUser($username)){
            $data = $this->checkPassword($username,$password);
            if(!empty($data)){
                extract($data);
                if(substr($iduser,0,2)=='KH'){
                    $sql = "select * from $this->khTable where id ='$iduser'"; 
                }else{
                    $sql = "select * from $this->nvTable where id ='$iduser'"; 
                }
                $data['user'] = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
                $sql = "select tenchucvu,controller,location,tenchucnang,icon_vector from chucvu join chucnang on locate(chucvu.id,chucnang.owner_role)!=0 where chucvu.id ='".substr($iduser,0,2)."'";
                $chucnang = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                $data['chucnang'] = $chucnang;
                return $data;
            }else{
                return 'Mật khẩu không đúng';
            }
        }else{
            return 'Tài khoản không tồn tại.';
        }
    }
    public function checkExistUser($username){
        $sql = "select iduser from $this->accountTable where username ='$username'"; 
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return !empty($data);
    }
    public function checkPassword($username,$password){
        $sql = "select iduser from $this->accountTable where username ='$username' and matkhau='$password'"; 
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
