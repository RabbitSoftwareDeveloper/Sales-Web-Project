<?php
namespace App\Controllers;
use App\Models\BillModel;
use App\Models\UserModel;

class BillController extends BaseController{
    private $BillModel;
    private $UserModel;

    function __construct(){
        $this->BillModel= new BillModel;
        $this->UserModel= new UserModel;
    }
    

    function hoantatdonhang(){
        if(isset($_POST['hoantat'])){
            $username=$_POST['username'];
            $email=$_POST['email'];

            $sdt = $_POST['sdt'];
            $DiaChi = $_POST['Diachi'];
            

            
        }
    }
    function onlinecheckout(){
        if(isset($_POST['momo'])){
            echo 'Thanh toan momo';
        }else 
        if(isset($_POST['vnpay'])){
            echo "Thanh toan vnpay";
        }
    }

}