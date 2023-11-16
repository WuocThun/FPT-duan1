
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
        input[type="password"], input[type="number"] {
            width: 500px;
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
            font-size: 40px;
            margin-bottom: 5%;
        }

        #_form {
            margin-top: 20px;
            text-align: center;
            margin-left: -15%;
        }

        #_form input[type="submit"],input[type="reset"]  {
            width: 30%;
            margin-left: 3%;
            padding: 3%;
            margin: 5%;
            font-size: 15px;
            border-radius: 50px;
            box-shadow: 0px 0px 5px white;

        }

        #_form input[type="submit"]:hover,input[type="reset"]:hover {
            background-color: brown;
            color: white;
            border-radius: 50px;
            box-shadow: 0px 0px 5px black;


        }

        #_form a {
            color: red;
            text-decoration: none;
        }
        .error {
          color: red;
          display: none;
        }
    </style>
</head>

        <div class="tongfr">
            <div class="fr"><img id="image" onclick="changeImage1()" src="img/fr2.png" alt=""></div>
            <div id="_form" class="_form">
                <h1>ĐĂNG KÝ</h1>
                <form onsubmit="return dangky()" method="post">
                    <div class="mb">
                        <input type="text" id="name" placeholder="Username"><br>
                        <div id="nameError" class="error"></div>
                    </div>
                    <div class="mb">
                        <input type="text" id="email" placeholder="Email"><br>
                        <div id="emailError" class="error"></div>
                    </div>
                    <div class="mb">
                        <input type="number" id="phone" placeholder="Phone"><br>
                        <div id="phoneError" class="error"></div>
                    </div>
                    <div class="mb">
                        <input type="text" id="addrr" placeholder="Address"><br>
                        <div id="addressError" class="error"></div>
                    </div>
                    <div class="mb">
                        <input type="password" id="pass" placeholder="Password">
                        <div id="passwordError" class="error"></div>
                    </div>
                    <input type="submit" value="Đăng ký">
                    <input type="reset"  value="Nhập lại"><br>
                    Bạn chưa đã có tài khoản? Vui lòng <a href="dangnhap.html"> đăng nhập</a>

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


    <script src="/Duanmau-FPT/app.js"></script>
</body>


</html>