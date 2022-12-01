<?php
#Kế thừa từ class Model
class SignInModel extends Model{
    protected $userTable = 'khachhang';
    protected $accountTable = 'taikhoan';
    protected $countUser = 'countuser';
    public function __construct()
    {
        parent::__construct();
    }

    public function checkExistUser($username){
        $sql = "select * from $this->accountTable where username ='$username'"; 
        $data = $this->db->query($sql)->fetchAll();
        return !empty($data);
    }


    
}
