<?php
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include "view/header.php";
include 'global.php';

$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$d1dm = loadAll_danhmuc_home();
if ((isset($_GET["act"])) && ($_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case "sanpham":
            include "view/sanpham.php";
            break;
        case "sanpham1":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadAll_sanpham("", $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham1.php";
            } else {
                include 'view/home.php';
            }
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "dangnhap":
            include "view/dangnhap.php";
            break;
        case "dangky":
            if((isset($_POST['email'])) && (isset($_POST['email'])) 
                && ($_POST['user'] != "")&& ($_POST['user'] != "")
                && (isset($_POST['pass']))&& ($_POST['pass'] != "")
                && (isset($_POST['addr']))&& ($_POST['addr'] != "")
                && (isset($_POST['tel']))&& ($_POST['tel'] != "")
                ){
                    if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $addr = $_POST['addr'];
                $tel = $_POST['tel'];
                insert_taikhoan($user, $pass, $email, $addr, $tel);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
            }
        }else{
            $thongbao = 'Đăng ký thật bại, vui lòng đăng ký lại';
        }
            include 'view/bodangky.php';
            break;
        case "sanphamct":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $onesp = loadOne_sanpham($_GET['idsp']);
                include "view/sanphamct.php";
            } else {
                include 'view/home.php';
            }
            break;
        case "thanhtoan":
            include "view/thanhtoan.php";
            break;
        case "giohang":
            include "view/giohang.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
