<?php
#Kế thừa từ class Model
class BookingModel extends Model{
    protected $table = 'lichdat';

    public function __construct()
    {
        parent::__construct();
    } 

    public function datlich($data){
        $data['idkh'] = $_SESSION['user']['id'];
        $data['bienso'] = strtoupper($data['bienso']);
        $data['trangthailichdat'] = false;
        $data['thoigiandat']= date("Y-m-d H:i:s");
        extract($data);
        $result = $this->kiemtraxe($bienso,$idkh);
        if(is_bool($result)){
            return $this->db->insert($this->table,$data);
        }else{
            return $this->db->update($this->table,$data,"id=$result");
        }
    }

    private function kiemtraxe($bienso,$idkh){
        $sql = "select id from lichdat where bienso='$bienso' and trangthailichdat=false and idkh='$idkh'";
        $data = $this->db->query($sql)->fetch();
        if(empty($data)){
            return false;
        }else{
            return $data['id'];
        }
    }

    public function timkiem($idkh,$condition=''){
        if(!empty($condition)){
            $sql = "select ten,sdt,ngay,thoigiandat,bienso, CONCAT_WS(' ', hangxe,loaixe ) as `tenxe` from lichdat where idkh = '$idkh' and bienso like '$condition'";
        }
        else{
            $sql = "select ten,sdt,ngay,thoigiandat,bienso,(`hangxe`+' '+`loaixe`) as `tenxe` from lichdat where idkh = '$idkh'";
        }
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }   
}