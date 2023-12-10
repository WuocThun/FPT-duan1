<style>
.thanhtoan video {
    width: 100%;
    margin-top: -6%;
}

.tongtt {
    background-color: rgba(11, 11, 11, 0.3);
    /* Màu nền cho thẻ nav */
    transform: translate(60%, -121%);
    /* Để căn giữa thẻ nav chính xác */
    color: white;
    width: 37%;
    margin-left: 30%;
    text-align: center;
    padding: 3%;
    border-radius: 100px;
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
    margin-top: 5%;
    font-size: 15px;
    box-shadow: 0px 0px 2px brown;
    background-color: brown;
    border-radius: 50px;
    color: white;
}

.tongtt button:hover {
    opacity: 0.7;
    /* Giảm độ mờ khi hover */


}


.error {
    text-align: left;
    color: brown;
    display: none;
    margin-top: -20px;
}
</style>

</head>
<div class="thanhtoan">
    <video loop autoplay src="img/ssvd.mp4"></video>
    <?php
if(isset($_SESSION['userdn'])){
    $name= $_SESSION['userdn']['user'];
    $nameuser= $_SESSION['userdn']['nameuser'];
    $addr= $_SESSION['userdn']['addr'];
    $tel= $_SESSION['userdn']['tel'];
    $name= $_SESSION['userdn']['user'];
    $id= $_SESSION['userdn']['id'];
}else{
    $name= "";
    $addr= "";
    $tel= "";
    $name= "";
};

?>
    <div class="tongtt">
        <h1>KIỂM TRA ĐƠN HÀNG</h1>
        <form onsubmit="return thanhtoan()" method="post">
            <input type="text" name="nameuser" placeholder="Tn" value="<?=$nameuser?>" id="namett">
            <br>
            <div id="namettError" class="error"></div>
            <br><input type="text" name="user" placeholder="Tn" value="<?=$name?>" id="namett"> <br>
            <div id="accError" class="error"></div>
            <br><input type="text" value="<?=$tel?>" maxlength="10" id="teltt"> <br>
            <div id="telError" class="error"></div>
            <br><input type="text" value="<?=$addr?>" id="addtt"> <br>
            <div id="addError" class="error"></div><br>
            <input type="checkbox">Thanh toán sau khi nhận hàng <br>
            <input type="submit" value="Thanh Toán" `>
            <h4>Bạn cần nhập thêm thông tin để hoàn thiện
                <input type="hidden" name="id" value="$id">
        </form>
    </div>

</div>
<div class="thanhtoan">
    <video loop autoplay src="img/sushi1.mp4"></video>
    <div class="tongtt">

        <table>
            <?php
        view_cart_noPay();
        ?>
        </table>
        <div>


        </div>
    </div>
</div>

<script src="/FPT-duan1/view/style/scrip.js"></script>