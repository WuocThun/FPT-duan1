<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/style/style1.css">

    <style>
        .fade {
            animation: blurSlide 8s ease-in-out infinite;
        }

        @keyframes blurSlide {

            0%,
            100% {
                opacity: 0.9;
                filter: blur(0);
                transform: translateY(0);
            }

            50% {
                opacity: 1;
                filter: blur(3px);
                transform: translateY(-10px);
            }
            
        }
        @media only screen and (max-width: 600px) {
            .menu{
                display: none;
            }
        }

       
    </style>
</head>
<?php
if(isset($_SESSION['userdn'])){
    extract($_SESSION['userdn']);
    ?>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=giohang1">Xin chào <?$userdn?></a></li>
                <li><a href="index.php?act=giohang">Giỏ hàng</a></li>
            </ul>
        </div>
<?php
}else{
?>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                <li><a href="index.php?act=giohang">Giỏ hàng</a></li>

            </ul>
        </div>

<?php
}
?>
