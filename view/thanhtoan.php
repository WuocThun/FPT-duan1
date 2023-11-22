
    <style>
        
        .thanhtoan video{
            width: 100%;
            margin-top: -6%;
        }
        .tongtt{
            background-color: rgba(11, 11, 11, 0.3); /* Màu nền cho thẻ nav */
            transform: translate(50%, -117%); /* Để căn giữa thẻ nav chính xác */
            color: white;
             width: 43%;
             margin-left: 30%;
            text-align: center;
            padding: 3%;
            border-radius: 50px;
            box-shadow: 0px 0px 5px black;
            margin-bottom: -40%;
        }
        .tongtt h1{
            margin-bottom: 10%;
            font-size: 33px;
            color: rgb(255, 254, 254);
            text-shadow: 2px 2px 2px #c92727;
        }
        #hoten{
            width: 47%;
            margin-right: 2%;
        }
       
        .tongtt input{
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
            font-weight: bold;}
            
        .tongtt input[type="text"]{
            width: 100%;
        }
       .tongtt button{
        width: 35%;
            padding: 2.5%;
            margin-top: 5%;
            font-size: 15px;
            box-shadow: 0px 0px 2px brown;
            background-color: brown;
           border-radius: 50px;
            color: white;
       }
       .tongtt button:hover{
        opacity: 0.7; /* Giảm độ mờ khi hover */


       }
    </style>
</head>
        <div class="thanhtoan">
            <video loop autoplay src="/FPT-duan1/img/ssvd.mp4"></video>

            <div class="tongtt">
                <h1>THÔNG TIN KHÁCH HÀNG</h1> 
            <form action="">
                <input id="hoten" type="text" placeholder="Họ"> <input id="hoten" type="text" placeholder="Tên"> <br>
                <br><input type="text" placeholder="Tên tài khoản"> <br>
                <br><input type="text" placeholder="Số điện thoại" maxlength="10"> <br>
                 <br><input type="text" placeholder="Địa chỉ"> <br>
                <input type="checkbox">Thanh toán sau khi nhận hàng <br>
                <button>Thanh toán</button>
            </form>
            </div>
           
        </div>
    
