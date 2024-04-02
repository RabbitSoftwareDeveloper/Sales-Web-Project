<?php
namespace App\Models;
class BillModel{
    private $db;

    function __construct(){
        $this->db = new DatabaseModel;
    }


    public function getBill(){
        $sql="SELECT * FROM bill";
        return $this->db->get_one($sql);
    }

    public function insertuser($username, $password, $email, $sdt, $HinhAnh, $DiaChi, $Role){
        $sql = "INSERT INTO taikhoan(username, password, email, sdt,  HinhAnh, DiaChi, Role) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $this->db->pdo_execute($sql, $username, $password, $email ,$sdt, $HinhAnh, $DiaChi, $Role);
    }
}