<?php
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include "view/header.php";
include 'global.php';

$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$d1dm = loadAll_danhmuc_home();
if((isset($_GET["act"])) && ($_GET["act"]!="")){
$act = $_GET["act"];
switch($act){
    case "sanpham":
        include"view/sanpham.php";
        break;
    case "gioithieu":
        include"view/gioithieu.php";
        break;
    case "dangnhap":
        include"view/dangnhap.php";
        break;
    case "sanphamct":
        if (isset($_GET['idsp'])&&($_GET['idsp'>0])) {

        }else{
            $onesp = loadAll_sanpham($id);
            include"view/sanphamct.php";
        }
        break;
    case "thanhtoan":
        include"view/thanhtoan.php";
        break;
    case "giohang":
        include"view/giohang.php";
        break;
    default:
        include "view/home.php";
        break;
}
}else{
    include "view/home.php";
}
include "view/footer.php";