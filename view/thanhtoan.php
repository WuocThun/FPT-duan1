<style>
    .thanhtoan video {
        width: 100%;
        margin-top: -6%;
    }

    .tongtt {
        background-color: rgba(11, 11, 11, 0.3);
        /* Màu nền cho thẻ nav */
        transform: translate(50%, -117%);
        /* Để căn giữa thẻ nav chính xác */
        color: white;
        width: 43%;
        margin-left: 30%;
        text-align: center;
        padding: 3%;
        border-radius: 50px;
        box-shadow: 0px 0px 5px black;
        margin-bottom: -40%;
    }

    .tongtt h1 {
        margin-bottom: 10%;
        font-size: 33px;
        color: rgb(255, 254, 254);
        text-shadow: 2px 2px 2px #c92727;
    }

    #hoten {
        width: 47%;
        margin-right: 2%;
    }

    .tongtt input {
        border-top: none;
        border-left: none;
        border-right: none;
        background: none;
        color: white;
        padding: 1%;
        margin-bottom: 5%;
    }

    .tongtt input::placeholder {
        color: white;
        font-weight: bold;
    }

    .tongtt input[type="text"] {
        width: 100%;
    }

    .tongtt input[type="submit"] {
        width: 35%;
        padding: 2.5%;
        margin-top: 3%;
        font-size: 15px;
        box-shadow: 0px 0px 2px brown;
        background-color: brown;
        border-radius: 50px;
        color: white;
    }

    .tongtt input[type="submit"]:hover {
        opacity: 0.7;
        /* Giảm độ mờ khi hover */


    }

    .error {

        text-align: left;
        color: brown;
        display: none;
        margin-top: -10%;
        padding-bottom: 20px;
        padding-top: 30px;
    }
</style>

</head>
<div class="thanhtoan">
    <video loop autoplay src="/FPT-duan1/img/ssvd.mp4"></video>

    <div class="tongtt">
        <h1>THÔNG TIN KHÁCH HÀNG</h1>
        <form onsubmit="return thanhtoan()" method="post">
            <input id="hoten" type="text" placeholder="Họ"> <input id="hoten" type="text" placeholder="Tên"> <br>
            <div id="namettError" class="error"></div>  
            <br><input type="text" placeholder="Tên tài khoản" id="namett"> <br>
            <div id="accError" class="error"></div>
            <br><input type="text" placeholder="Số điện thoại" maxlength="10" id="teltt"> <br>
            <div id="telError" class="error"></div>
            <br><input type="text" placeholder="Địa chỉ" id="addtt"> <br>
            <div id="addError" class="error"></div>
            <input type="checkbox">Thanh toán sau khi nhận hàng <br>
            <input type="submit" value="Thanh Toán">
        </form>
       
    </div>
    <script src="/FPT-duan1/view/style/scrip.js"></script>
</div>

