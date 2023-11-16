<?php
include "view/header.php";
if((isset($_GET["act"])) && ($_GET["act"]!="")){
$act = $_GET["act"];
switch($act){
    case "sanpham":
        include"view/sanpham.php";
}
}else{
    include "view/home.php";
}
include "view/footer.php";