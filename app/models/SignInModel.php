<?php
#Kế thừa từ class Model
class SignInModel extends Model{
    protected $khach_hang = 'khach_hang';
    protected $nhan_vien = 'nhan_vien';
    protected $tai_khoan = 'tai_khoan';
    protected $khach_hang_cols= '`MaKhachHang`as id,`Ho`,`Ten`,`GioiTinh`,`NgaySinh`,`SDT`,`Email`,`DiaChi`,`LoaiKH`';
    protected $nhan_vien_cols = '`MaNhanVien` as id,`Ho`,`Ten`,`GioiTinh`,`ChucVu`';
    protected $chuc_vu = 'chuc_vu';
    protected $chuc_nang = 'chuc_nang';
    protected $tham_so = 'tham_so';
    public function __construct()
    { 
        parent::__construct();
    }
    public function login($username,$password){
        if($this->checkExistUser($username)){
            $data = $this->checkPassword($username,$password);
            if(!empty($data)){
                extract($data);
                if(substr($MaNguoiDung,0,2)=='KH'){
                    $sql = "select $this->khach_hang_cols from $this->khach_hang where MaKhachHang ='$MaNguoiDung'"; 
                }else{
                    $sql = "select $this->nhan_vien_cols from $this->nhan_vien where MaNhanVien ='$MaNguoiDung'"; 
                }
                $data['user'] = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
                $sql = "select tenchucvu,controller,location,tenchucnang,icon_vector from $this->chuc_vu join $this->chuc_nang on locate($this->chuc_vu.MaChucVu,$this->chuc_nang.owner_role)!=0 where $this->chuc_vu.MaChucVu ='".substr($MaNguoiDung,0,2)."'";
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
        $sql = "select MaNguoiDung from $this->tai_khoan where TenTaiKhoan ='$username'"; 
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return !empty($data);
    }
    public function checkPassword($username,$password){
        $sql = "select MaNguoiDung from $this->tai_khoan where TenTaiKhoan ='$username' and MatKhau='$password'"; 
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
