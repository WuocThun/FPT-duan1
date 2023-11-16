<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .tongfr {

            display: flex;
        }

        ._form {
            color: white;
            margin-top: 5%;
        }

        .fr img {
            width: 1000px;
            margin-top: 5%;

            height: 550px;
        }

        #_form input[type="text"],
        input[type="password"] {
            width: 500px;
            padding: 3%;
            margin-bottom: 10%;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none;
            color: white;

        }

        #_form input::placeholder {
            color: #f0f0f0;
            font-weight: bold;

        }

        #_form h1 {
            font-size: 40px;
            margin-bottom: 10%;
        }

        #_form {
            text-align: center;
            margin-left: -15%;
        }

        #_form button {
            width: 25%;
            margin-left: 3%;
            padding: 3%;

        }

        #_form a {
            color: white;
            text-decoration: none;
        }

        #_form input[type="submit"] {
            width: 30%;
            margin-left: 3%;
            padding: 3%;
            margin: 5%;
            font-size: 15px;
            border-radius: 50px;
            box-shadow: 0px 0px 5px white;

        }

        #_form input[type="submit"]:hover {
            background-color: brown;
            color: white;
            border-radius: 50px;
            box-shadow: 0px 0px 5px black;

        }


        .error {
            color: red;
            display: none;
            padding-bottom: 10px;
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
        <div class="tongfr">
            <div class="fr"><img id="image" onclick="changeImage1()" src="img/fr2.png" alt=""></div>
            <div id="_form" class="_form">
                <h1>ĐĂNG NHẬP</h1>
                <form onsubmit="return dangnhap()" method="post">
                    <div class="mb">
                        <input type="text" id="namedn" placeholder="Username"><br>
                        <div id="nameError" class="error"></div>
                    </div>
                    <div class="mb">
                        <input type="password" id="passdn" placeholder="Password"><br>
                        <div id="passError" class="error"></div>
                    </div>
                    <input type="submit" value="Đăng nhập"><br>
                    <a href="#">Quên mật khẩu?</a> <br>
                    Bạn chưa có tài khoản? <a href="dangky.html">Đăng ký</a> ngay

                </form>
            </div>
        </div>



        <footer class="duoi">
            <div class="cuoi">
                <h2>SUSHI KOKORO </h2><br><br>
    
                Hotline: + 84972220532 - + 84972220456 <br> <br>
    
                Email: cuahangsushikokoro@gmai.com <br><br>
    
                Website: http://cuahangsushikokoro@gmai.com
    
    
    
            </div>
            <div id="cuoi" class="cuoi">
                <h2>Địa chỉ cửa hàng</h2> <br> <br>

                Cơ sở 1 (chính): 10 Phan Bội Châu, Q.Hải Châu, Tp.Đà Nẵng <br>
                <br> <br>
                Cơ sở 2: 230 Nguyễn Thị Thập, Q.Liên Chiểu, Tp.Đà Nẵng <br>

                <br> <br>
                Cơ sở 3: 116 Phùng Hưng, Q.Liên Chiểu, Tp.Đà Nẵng <br>

            </div>

        </footer>
    </div>



</body>
<script src="app.js"></script>


</html>