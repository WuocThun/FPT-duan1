<style>
    .tongfr {

        display: flex;
    }

    ._form {
        margin-top: 1%;
        color: white;
        padding: 3%;

    }

    .fr img {
        width: 900px;
        margin-top: 5%;
        height: 550px;
    }

    #_form input[type="text"],
    input[type="password"],
    input[type="number"] {
        width: 400px;
        padding: 3%;
        margin-bottom: 5%;
        border-top: none;
        border-left: none;
        border-right: none;
        background: none;
        color: white;

    }
    #_form label{
        margin-right: 30px;
    }

    #_form input::placeholder {
        color: #f0f0f0;
        font-weight: bold;


    }

    #_form h1 {
        font-size: 45px;
        color: rgb(255, 254, 254);
        text-shadow: 2px 2px 2px #c92727;
    }

    #_form {
       text-align: center;
        margin-left: -5%;
    }

    #_form input[type="submit"],
    input[type="reset"] {
        width: 30%;
        border-radius: 50px;
        padding: 2.5%;
        margin-bottom: 5%;
        background-color: brown;
        color: white;
        font-size: 15px;
        box-shadow: 0px 0px 3px brown;
        opacity: 1;
        margin-left: 50px;
        /* Giảm độ mờ khi hover */
        transition: opacity 0.3s ease;

    }

    #_form input[type="submit"]:hover,
    input[type="reset"]:hover {
        opacity: 0.7;
        /* Giảm độ mờ khi hover */


    }

    #_form a {
        color: white;
        text-decoration: none;
    }

    #_form a:hover {
        color: red;
        text-decoration: none;
    }

    .error {
        text-align: left;
        color: brown;
        display: none;
        margin-top: -9%;
        padding-bottom: 1%;
        padding-top: 22px;
    }
</style>
</head>

<div class="tongfr">
    <div class="fr"><img id="image" onclick="changeImage1()" src="img/fr2.png" alt=""></div>
    <div id="_form" class="_form">
        <h1>QUÊN MẬT KHẨU</h1>
        <form onsubmit="" action="index.php?act=quenmk" method="post">
            <div class="mb">
                <label>Email</label>
                <input  type="text" name="email" id="email" placeholder="Nhập email "><br>
            </div>
            <input type="submit" onsubmit="" name="quenmk" value="Quên mật khẩu"> <br>

            Bạn chưa đã có tài khoản? Vui lòng <a href="index.php?act=dangnhap"> Đăng ký</a>

        </form>
        <?php
        if(isset($thongbao) && ($thongbao!="")){
                                echo '<h3 style="color:red;margin:20px">'.$thongbao.'</h3>';
                            }?> 
    </div>
</div>
