<?php
include "view/header.php";
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
        include"view/sanphamct.php";
        break;
    case "thanhtoan":
        include"view/thanhtoan.php";
        break;
    case "giohang":
        include"view/giohang.php";
        break;    

                        


}
}else{
    include "view/home.php";
}
include "view/footer.php";