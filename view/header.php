<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOKORO</title>
    <link rel="shortcut icon" href="https://scontent-den4-1.xx.fbcdn.net/v/t1.15752-9/410578609_315571031317634_4419286347064214404_n.jpg?stp=dst-jpg_p206x206&_nc_cat=111&ccb=1-7&_nc_sid=510075&_nc_ohc=A8QcAbEHTzMAX8GaE5s&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-den4-1.xx&oh=03_AdS61KyRIR2UPXAk13rZnW6CjsF-YAvtYVxcD6CqipaHAQ&oe=65A11433">
    <!-- <link rel="shortcut icon" type="image/png" href="../img/logo.jpg"/> -->

    <link rel="stylesheet" href="view/style/style1.css">
    <style>
        .paste-button {
        display: none;
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .button {
        background-color: black;
        color: white;
        padding: 10px 15px;
        font-size: 15px;
        font-weight: bold;
        border: 2px solid transparent;
        border-radius: 15px;
        cursor: pointer;
        }

        .dropdown-content {
        display: none;
        font-size: 13px;
        position: absolute;
        z-index: 1;
        min-width: 200px;
        background-color: #212121;
        border: 2px solid black;
        border-radius: 0px 15px 15px 15px;
        box-shadow: 0px 8px 16px 0px black;
        }

        .dropdown-content a {
        color: white;
        padding: 8px 10px;
        text-decoration: none;
        display: block;
        transition: 0.1s;
        }

        .dropdown-content a:hover {
        background-color: white;
        color: #212121;
        }

        .dropdown-content a:focus {
        background-color: #212121;
        color: #4CAF50;
        }

        .dropdown-content #top:hover {
        border-radius: 0px 13px 0px 0px;
        }

        .dropdown-content #bottom:hover {
        border-radius: 0px 0px 13px 13px;
        }

        .paste-button:hover button {
        border-radius: 15px 15px 0px 0px;
        }

        .paste-button:hover .dropdown-content {
        display: block;
        }

        .menu > ul {
        padding-left: 50%;
        }



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
        @media screen and (max-width: 600px) {
            .menu ul {
                display: none;

            }
            .paste-button{
                display: block;
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
                <li><a href="index.php?act=giohang1">Giỏ hàng</a></li>
                <li><a href="index.php?act=giohang">Xin chào|<b><?=$user?></b>|</a></li>
            </ul>

            <div class="paste-button">
        <button class="button">Menu &nbsp; ▼</button>
        <div class="dropdown-content">
            <a id="top" href="index.php">Trang chủ</a>
            <a id="middle" href="index.php?act=sanpham">Sản phẩm</a>
            <a id="bottom" href="index.php?act=gioithieu">Giới thiệu</a>
            <a id="bottom" href="index.php?act=giohang1">Giỏ hàng</a>
            <a id="bottom" href="index.php?act=giohang">Đăng nhập</a>
        </div>
        </div>
       

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
                <li><a href="index.php?act=giohang">Giỏ hàng</a></li>
                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
            </ul>
        </div>

<?php
}
?>
