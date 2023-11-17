
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
        input[type="password"] {
            width: 480px;
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
        }

        #_form {
            text-align: center;
            margin-left: -5%;
        }

        #_form button {
            background-color: brown;
            color: white;
            border-radius: 50px;
            box-shadow: 0px 0px 5px black;

        }

        #_form a {
            color: white;
            text-decoration: none;
        }

        #_form input[type="submit"] {
            width: 30%;
            margin-left: 3%;
            padding: 3%;
            margin-bottom: 5%;
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
        #_form a:hover {
            color: brown;
            text-decoration: none;
        }


        .error {
            color: red;
            display: none;
            padding-bottom: 10px;
        }
    </style>


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
                    <a href="#">Quên mật khẩu?</a> <br> <br>
                    Bạn chưa có tài khoản? <a href="dangky.html">Đăng ký</a> ngay

                </form>
            </div>
        </div>

