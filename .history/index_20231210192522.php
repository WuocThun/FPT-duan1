<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include 'model/cart.php';
include 'model/binhluan.php';
include "view/header.php";
include 'global.php';
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$d1dm = loadAll_danhmuc_home();
if ((isset($_GET["act"])) && ($_GET["act"] != "")){
    $act = $_GET["act"];
    switch ($act) {
        case "sanpham":
            include "view/sanpham.php";
            break;
        case "sanpham1":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadAll_sanpham("", $iddm);
                // $tendm = load_ten_dm($iddm);
                // $tendm =  doad_namedm($iddm);
                include "view/sanpham1.php";
            } else {
                include 'view/home.php';
            }
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                if (
                    isset($_POST['user']) && $_POST['user'] != "" &&
                    isset($_POST['nameuser']) && $_POST['nameuser'] != "" &&
                    isset($_POST['pass']) && $_POST['pass'] != "" &&
                    isset($_POST['email']) && $_POST['email'] != "" &&
                    isset($_POST['addr']) && $_POST['addr'] != "" &&
                    isset($_POST['tel']) && $_POST['tel'] != ""  &&
                    $_SERVER['REQUEST_METHOD'] == 'POST'

                ) {
                    $error = [];
                    //validate USER
                    if (empty($_POST['user']) && isset($_POST['user'])) {
                        $error['user']['require'] = 'Tên đăng nhập không được để trống';
                    } else {
                        if (strlen(trim($_POST['user'])) < 5) {
                            $error['user']['require'] = 'Tên đăng nhập phải hơn 5 ký tự';
                        }
                    }
                    //validate PASS
                    if (empty($_POST['pass'])) {
                        $error['pass']['require'] = 'Mật khẩu không được để trống';
                    } else {
                        if (strlen(trim($_POST['pass'])) < 3) {
                            $error['pass']['require'] = 'Mật khẩu phải hơn 3 ký tự';
                        }
                    }
                    //validate EMAIL
                    if (empty($_POST['email'])) {
                        $error['email']['require'] = 'Email không được để trống';
                    } else {
                        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                            $error['email']['invald'] = 'Email không hợp lệ';
                        }
                    }
                    if (empty($_POST['addr'])) {
                        $error['addr']['require'] = 'Địa chỉ không được để trống';
                    }
                    if (empty($_POST['tel'])) {
                        $error['tel']['require'] = 'Số điện thoại không được để trống';
                    } else {
                        if (strlen(trim($_POST['tel'])) < 10) {

                            $error['tel']['require'] = 'Số điện thoại phải có 10 ký tự';
                        }
                    }
                    $thongbao = "Bạn đã đăng ký thành công";
                    insert_taikhoan($_POST['user'],$_POST['nameuser'], $_POST['pass'], $_POST['email'], $_POST['addr'], $_POST['tel']);
                } else {
                    $thongbao = "Đăng ký thất bại, vui lòng đăng ký lại.";
                }
            }
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $userdn = $_POST['userdn'];
                $passdn = $_POST['passdn'];
                $checkuser = check_user($userdn, $passdn);
                if (is_array($checkuser)) {
                    $_SESSION['userdn'] = $checkuser;
                    // $thongbao = "Đăng nhập thành công";
                    header('location: index.php');
                } else {
                    $thongbao = 'Tài khoản không tồn tại';
                    // $thongbao = 'Tài khoản không tồn tại, vui lòng <a href="index.php?act=dangky" > đăng ký tại đây </a>';
                }
            };
            include "view/dangnhap.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                if (
                    isset($_POST['user']) && $_POST['user'] != "" &&
                    isset($_POST['pass']) && $_POST['pass'] != "" &&
                    isset($_POST['nameuser']) && $_POST['nameuser'] != "" &&
                    isset($_POST['email']) && $_POST['email'] != "" &&
                    isset($_POST['addr']) && $_POST['addr'] != "" &&
                    isset($_POST['tel']) && $_POST['tel'] != ""  &&
                    $_SERVER['REQUEST_METHOD'] == 'POST'

                ) {
                    $error = [];
                    //validate USER
                    if (empty($_POST['user']) && isset($_POST['user'])) {
                        $error['user']['require'] = 'Tên đăng nhập không được để trống';
                    } else {
                        if (strlen(trim($_POST['user'])) < 5) {
                            $error['user']['require'] = 'Tên đăng nhập phải hơn 5 ký tự';
                        }
                    }
                    //validate PASS
                    if (empty($_POST['pass'])) {
                        $error['pass']['require'] = 'Mật khẩu không được để trống';
                    } else {
                        if (strlen(trim($_POST['pass'])) < 3) {
                            $error['pass']['require'] = 'Mật khẩu phải hơn 3 ký tự';
                        }
                    }
                    //validate EMAIL
                    if (empty($_POST['email'])) {
                        $error['email']['require'] = 'Email không được để trống';
                    } else {
                        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                            $error['email']['invald'] = 'Email không hợp lệ';
                        }
                    }
                    if (empty($_POST['addr'])) {
                        $error['addr']['require'] = 'Địa chỉ không được để trống';
                    }
                    if (empty($_POST['tel'])) {
                        $error['tel']['require'] = 'Số điện thoại không được để trống';
                    } else {
                        if (strlen(trim($_POST['tel'])) < 10) {

                            $error['tel']['require'] = 'Số điện thoại phải có 10 ký tự';
                        }
                    }
                    $thongbao = "Thêm thành công";
                    insert_taikhoan($_POST['user'],$_POST['nameuser'], $_POST['pass'], $_POST['email'], $_POST['addr'], $_POST['tel']);
                } else {
                    $thongbao = "Vui lòng nhập đủ thông tin.";
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
            include "view/thanhtoan2.php";
            break;
            case "edit_taikhoan":
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $addr = $_POST['addr'];
                    update_taikhoan($id, $user, $nameuser,$pass, $email, $tel, $addr);
                    $_SESSION['userdn'] = check_user($user, $pass);
                    // header ('location: view/edit_taikhoan.php');
                }  include 'view/edit_taikhoan.php';
                break;
        case "giohang":
            include "view/giohang.php";
            break;
            case "quenmk":
                if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                    } else {
                        $thongbao = "Không tìm thấy Email";
                    }
                }
                include 'view/quenmk.php';
                break;
            // case "quenmk":
            //     if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
            //         $email = $_POST['email'];
            //         $checkemail = checkemail($email);
            //         if (is_array($checkemail)) {
            //             $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
            //         } else {
            //             $thongbao = "Không tìm thấy Email";
            //         }
            //     }
            //     include 'view/quenmk.php';
            //     break;
            case "thoat":
                session_unset();
                header('location: index.php');
        case "giohang1":
            if (isset($_POST['addtocard']) && ($_POST['addtocard'])) {
                // $onesp = loadOne_sanpham($_GET['idsp']);
                $id= $_POST['id'];
                $namesp= $_POST['namesp'];
                $imgsp= $_POST['imgsp'];
                $newpricesp= $_POST['newpricesp'];
                $soluong =1;
                $thanhtien = $soluong * $newpricesp;
                $spadd= [$id, $namesp,$img,$newpricesp,$soluong,$thanhtien];
                //đẩy mảng con vô mảng 3
                array_push($_SESSION['mycart'],$spadd);
            };

            include "view/giohang1.php";
            break;
            case "delcart":
                if(isset($_GET['idcart']))
                {
                 //xoá mảng()
                    array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                header('location: index.php?act=giohang1');
                break;
            case "xacnhangiohang":
                //tạo bill
                if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                    $name= $_POST['nameuser'];
                    $tel= $_POST['tel'];
                    $addr= $_POST['addr'];
                    $pttt= $_POST['pttt'];
                    $ngaydathang = date("d/m/Y");
                    $tongdonhang = tongdonhang();
                    $idbill = insert_bill($name, $tel,$addr,$pttt,$ngaydathang,$tongdonhang);
                    //insert into cart 
                }
                include "view/xacnhangiohang.php";
                break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";