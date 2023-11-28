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
        width: 480px;
        padding: 3%;
        margin-bottom: 5%;
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
        margin-top: -4%;
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

        margin-left: 3%;
        padding: 2.5%;
        background-color: brown;
        color: white;
        margin-top: 5%;
        margin-bottom: 5%;
        font-size: 15px;
        box-shadow: 0px 0px 3px brown;
        opacity: 1;
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
        <h1>ĐĂNG KÝ</h1>
        <form onsubmit="return dangky()" method="post">
            <div class="mb">
                <input type="text" name="user" id="name" placeholder="Username"><br>
                <div id="nameError" class="error"></div>
            </div>
            <div class="mb">
                <input type="password" id="pass" name="pass" placeholder="Password">
                <div id="passwordError" class="error"></div>
            </div>
            <div class="mb">
                <input type="text" id="email" name="email" placeholder="Email"><br>
                <div id="emailError" class="error"></div>
            </div>
            <div class="mb">
                <input type="text" id="addrr" name="addr" placeholder="Address"><br>
                <div id="addressError" class="error"></div>
            </div>
            <div class="mb">
                <input type="number" id="phone" name="tel" placeholder="Phone"><br>
                <div id="phoneError" class="error"></div>
            </div>
           
            <input type="submit" value="Đăng ký">
            <input type="reset" value="Nhập lại"><br>
            Bạn chưa đã có tài khoản? Vui lòng <a href="index.php?act=dangnhap"> Đăng nhập</a>

        </form>
    </div>
</div>
<script src="../view//style/scrip.js"></script>