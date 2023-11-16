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
    </style>
</head>

<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="sanpham.html">Sản phẩm</a></li>
                <li><a href="gioithieu.html">Giới thiệu</a></li>
                <li><a href="dangnhap.html">Đăng nhập</a></li>
                <li><a href="dangky.html">Đăng ký</a></li>
            </ul>
        </div>
