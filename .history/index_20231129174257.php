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
            // case "dangky":
            //     if((isset($_POST['email'])) && (isset($_POST['email'])) 
            //         && ($_POST['user'] != "")&& ($_POST['user'] != "")
            //         && (isset($_POST['pass']))&& ($_POST['pass'] != "")
            //         && (isset($_POST['addr']))&& ($_POST['addr'] != "")
            //         && (isset($_POST['tel']))&& ($_POST['tel'] != "")
            //         )
            //         {
            //             if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
            //         $user = $_POST['user'];
            //         $pass = $_POST['pass'];
            //         $email = $_POST['email'];
            //         $addr = $_POST['addr'];
            //         $tel = $_POST['tel'];
            //         insert_taikhoan($user, $pass, $email, $addr, $tel);
            //         $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
            //     }
            // }else{
            //     $thongbao = 'Đăng ký thật bại, vui lòng đăng ký lại';
            // }
            //     include 'view/bodangky.php';
            //     break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $error = [];
                    //validate USER
                    if (empty($_POST['user'])) {
                        $error['user']['require'] = 'Tên đăng nhập không được để trống';
                    } else {
                        if (strlen(trim($_POST['user'])) < 5) {
                            $error['user']['require'] = 'Tên đăng nhập phải hơn 5 ký tự';
                        }
                    }
                    //validate PASS
                    if(empty($_POST['pass'])){
                        $error['pass']['require'] = 'Mật khẩu không được để trống';
                    }else {
                        if (strlen(trim($_POST['pass'])) < 3) {
                            $error['pass']['require'] = 'Mật khẩu phải hơn 3 ký tự';
                        }
                    }
                    //validate EMAIL
                    if(empty($_POST['email'])){
                        $error['email']['require'] = 'Email không được để trống';
                    }else {
                        if(!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
                         $error['email']['invald'] = 'Email không hợp lệ';
                        }
                    }
                    if(empty($_POST['addr'])){
                        $error['addr']['require'] = 'Địa chỉ không được để trống';
                    }
                    if(empty($_POST['tel'])){
                        $error['tel']['require'] = 'Số điện thoại không được để trống';
                    }else {
                        if (strlen(trim($_POST['tel'])) <10) {

                            $error['tel']['require'] = 'Số điện thoại phải có 10 ký tự';
                        } else {
                            if (strlen(trim($_POST['tel'])) >11) {

                                $error['tel']['invaild'] = 'Số điện thoại phải có 10 ký tự';
                        }
                    }



                    
                }
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
