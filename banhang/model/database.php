<?php
error_reporting(0);
class database
{
    // Khai báo các biến dưới dạng private
    private $hostname = 'localhost',
        $username = 'root',
        $password = '',
        $dbname = 'banhang';

    // Khai báo các biến kết nối toàn cục
    public $cn = NULL;
    public $rs = NULL;

    // Hàm kết nối
    public function connect()
    {
        // Kết nối
        $this->cn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        $this->cn->query("SET NAMES UTF8");
    }

    // Hàm ngắt kết nối
    public function close()
    {
        // Nếu đã kết nối
        if ($this->cn) {
            // Ngắt kết nối
            mysqli_close($this->cn);
        }
    }

    // Hàm truy vấn
    public function query($sql = null)
    {
        // Nếu đã kết nối
        if ($this->cn) {
            // Truy vấn
            $sql = mysqli_query($this->cn, $sql);
            return $sql;
        }
    }

    // Hàm đếm hàng
    public function num_rows($sql = null)
    {
        // Nếu đã kết nối
        if ($this->cn) {
            $row = mysqli_num_rows($sql);
            return $row;
        }
    }

    public function lay_rows($sql = null)
    {
        if ($this->cn) {
            $row = mysqli_fetch_array($sql);
            return $row;
        }
    }

    public function row($sql = null)
    {
        if ($this->cn) {
            $row = mysqli_fetch_row($sql);
            return $row;
        }
    }

    // Hàm lấy dữ liệu
    public function fetch_assoc($sql = null, $type)
    {
        // Nếu đã kết nối
        if ($this->cn) {
            // Nếu tham số type = 0
            if ($type == 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
                return $data;
            } // Nếu tham số type = 1
            else if ($type == 1) {
                $data = mysqli_fetch_assoc($sql);
                return $data;
            }
        }
    }

    // Hàm xử lý chuỗi dữ liệu truy vấn
    public function real_escape_string($string)
    {
        // Nếu đã kết nối
        if ($this->cn) {
            // Xử lý chuỗi dữ liệu truy vấn
            $string = mysqli_real_escape_string($this->cn, $string);
        } // Ngược lại chưa kết nối
        else {
            $string = $string;
        }
        return $string;
    }

    // Hàm lấy ID vừa insert
    public function insert_id()
    {
        // Nếu đã kết nối
        if ($this->cn) {
            // Lấy ID vừa insert
            return mysqli_insert_id($this->cn);
        }
    }

    public function dangnhap($username)
    {
        if ($this->cn) {
            $sql = "SELECT * FROM user WHERE user='$username'";
            return $sql;
        }
    }
    public function laythongtinuser($u){
        if ($this->cn)
        {
            $sql= "SELECT * FROM user WHERE user='$u'" ;
            return $sql;
        }
    }
    public function themsanpham($ten,$gia,$hinh)
    {

        if($this->cn)
        {
            $sql="INSERT INTO sanpham(masp,tensp,gia,hinhanh) VALUE ('','$ten','$gia','$hinh')";
            return $sql;
        }
    }
    public function hienthisanpham($i,$d)
    {
        if ($this->cn) {
            $sql = "SELECT * FROM sanpham LIMIT $i,$d";
            return $sql;
        }
    }
    public function hienthisanpham_banh($i,$d)
    {
        if ($this->cn) {
            $sql = "SELECT * FROM sanpham WHERE loai=1 LIMIT $i,$d";
            return $sql;
        }
    }
    public function hienthisanpham_trasua($i,$d)
    {
        if ($this->cn) {
            $sql = "SELECT * FROM sanpham WHERE loai=2 LIMIT $i,$d";
            return $sql;
        }
    }
    public function test()
    {
        if ($this->cn) {
            $sql = "SELECT * FROM sanpham ";
            return $sql;
        }


    }
    public function demsanpham(){
        if($this->cn){
            $sql="SELECT count(masp) as dem FROM sanpham";
            return $sql;
        }
    }
    public function demsanpham_banh(){
        if($this->cn){
            $sql="SELECT count(masp) as dem FROM sanpham WHERE loai=1 ";
            return $sql;
        }
    }
    public function demsanpham_trasua(){
        if($this->cn){
            $sql="SELECT count(masp) as dem FROM sanpham WHERE loai=2 ";
            return $sql;
        }
    }
    public function laysp($masp)
    {
        if ($this->cn) {
            $sql = "SELECT * FROM sanpham where masp='$masp'";
            return $sql;
        }
    }
    public function capnhatsp($idmasp,$ten,$gia,$hinh){
        if($this->cn){
            $sql="UPDATE sanpham SET `masp` =  '".$idmasp."',`tensp` =  '".$ten."',`gia` =  '".$gia."',`hinhanh` ='$hinh' where masp='".$idmasp."'";
            return $sql;
        }
    }
    public function sanpham_delete($masp){
        $delete= "delete from sanpham where masp in(";
        foreach($masp as $key=>$value)
        {
            $delete.="'".$value."',";
        }
        $delete .= "'')";
        return $delete;
    }
}
?>