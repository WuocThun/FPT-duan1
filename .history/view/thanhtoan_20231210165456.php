<style>
.spct {
                color: white;
                display: flex;
            }

            .tsp {
                width: 50%;
                flex-direction: column;
            }

            #tsp {
                width: 50%;

            }

        .tsp img {
            width: 70%;
            margin-left: 20%;
        }
        .tsp h1{
            padding-bottom: 5%;
            font-size: 40px;
            color: rgb(255, 254, 254);
            text-shadow: 2px 2px 2px #c92727;
        }
        .tsp strong {
            color: rgb(245, 113, 113);
        }

            .tsp p {
                line-height: 1.6em;
                width: 90%;
                height: 35%;
                max-height: 35%;
            }

            .tsp button,
            .tsp a button,#_button{
                margin-top: 10%;
                border: none;
                background-color: brown;
                color: white;
                box-shadow: 0px 0px 5px brown;
                opacity: 1;
                /* Giảm độ mờ khi hover */
                width: 200px;
                padding: 15px;
                font-size: 15px;
               
            }
            

            #_button{
                margin-left: 10%;
                margin-top: 37%;
            }



            .tsp button:hover,
            .tableBl button:hover,#_button:hover {
                opacity: 0.7;
                /* Giảm độ mờ khi hover */


            }

            .tableBl button{
                border: none;
                background-color: brown;
                color: white;
                padding: 1%;
                width: 15%;
                box-shadow: 0px 0px 5px brown;
                opacity: 1;
                /* Giảm độ mờ khi hover */
                transition: opacity 0.3s ease;

            }

            .tableBl {
                margin-top: 10%;
                margin-left: 10%
            }

            .tableBl table {
                width: 100%;

            }

            .bl {
                flex-direction: row;
                border-collapse: collapse;
                color: white;
                text-align: center;
                margin-top: 5%;
                margin-bottom: 5%;
                margin-left: 5%;
            }

            .bl th,
            td {
                width: 10%;
                padding: 2%;
                text-align: center;

            }

            .bl th {
                margin-left: 10%;
                font-size: 20px;
                background-color: brown;
                box-shadow: 0px 0px 5px brown;

            }

            .tableBl textarea {
                padding: 2%;
                width: 90%;
                background-color: black;
                box-shadow: 2px 2px 5px #888888;
                color: white;

            }

            .row-flex {
                display: flex;
                flex-direction: row;
            }
            .row-flex a{
                margin-left: 3%;
            }

            .tableBl textarea:hover {
                background-color: white;
                color: black;
            }

            .rating {
                display: inline-block;
            }

            .rating input {
                display: none;
            }

            .rating label {
                float: right;
                cursor: pointer;
                color: #ccc;
                transition: color 0.3s;
            }

            .rating label:before {
                content: '\2605';
                font-size: 20px;
            }

            .rating input:checked~label,
            .rating label:hover,
            .rating label:hover~label {
                color: brown;
                transition: color 0.3s;
            }
            .binhl{
                margin-left:-10%;
            }
 </style>
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
<style>
    .flex-row-inter{
        width: 100%;
        height: 100%;
        /* display: flex; */
        /* flex-direction: r; */
    }
</style>
<div class="flex-row-inter">
    <div style="float:right" class="tongtt">
        <h1>THÔNG TIN KHÁCH HÀNG</h1>
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

<div style="float:left" class="tongtt">
<table>
    <?php
        view_cart_noPay();
        ?>
        </table>
</div>    
    <div>
    </div>
    </div>
    <script src="/FPT-duan1/view/style/scrip.js"></script>
</div>