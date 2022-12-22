<?php
#Kế thừa từ class Model
class BookingModel extends Model{
    protected $lich_dat = 'lich_dat';
    protected $tham_so='tham_so';

    public function __construct()
    {
        parent::__construct();
    } 

    public function datlich($data){
        $data['MaKhachHang'] = $_SESSION['user']['id'];
        $data['BienSo'] = strtoupper($data['BienSo']);
        $data['tinhtranglichdat'] = false;
        $data['thoigiantaolich']= date("Y-m-d H:i:s");
        extract($data);
        $sql = "select GiaTri from $this->tham_so where mathamso = 'GHDL'";
        $limit = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        $sql = "select count(*) as solichdat from $this->lich_dat where curdate()=ngaydat";
        $solichdat = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        
        if($limit['GiaTri'] > $solichdat['solichdat']){
            $result = $this->kiemtraxe($BienSo,$MaKhachHang);
            if(is_bool($result)){
                $this->db->insert($this->lich_dat,$data);
                return 'Đặt lịch thành công';
            }else{
                $this->db->update($this->lich_dat,$data,"MaLichDat=$result");
                return 'Đã cập nhật lịch đặt cho biển số '.$data['BienSo'];
            }
        }else{
            return 'Giới hạn đặt ngày hôm nay đã vượt '.$limit['GiaTri'];
        }
        
    }

    private function kiemtraxe($bienso,$idkh){
        $sql = "select MaLichDat from $this->lich_dat where bienso='$bienso' and tinhtranglichdat=false and MaKhachHang='$idkh'";
        $data = $this->db->query($sql)->fetch();
        if(empty($data)){
            return false;
        }else{
            return $data['MaLichDat'];
        }
    }

    public function timkiem($idkh,$condition=''){
        if(!empty($condition)){
            $sql = "select ten,sdt,ngay,thoigiandat,bienso, CONCAT_WS(' ', hangxe,loaixe ) as `tenxe` from $this->lich_dat where idkh = '$idkh' and bienso like '$condition'";
        }
        else{
            $sql = "select ten,sdt,ngay,thoigiandat,bienso,CONCAT_WS(' ', hangxe,loaixe ) as `tenxe` from $this->lich_dat where idkh = '$idkh'";
        }
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }   
}