
    <style>
      
       /* body{
        background-color: brown;
        background: linear-gradient(to right, #cf6565,rgb(239, 239, 220));
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
       } */
       .container_{
        background-color: black;
        border-radius: 30px;
        box-shadow: 0px 5px 15px rgba(0,0,0,0.35);
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 650px;
       }
       .container_ h1{
        margin-top: -4%;
        color: rgb(228, 226, 226);
        font-size: 50px;
        text-shadow: 2px 2px 2px #ae3d3d;
       }
       .toggle-panel h1{
        color: white;
        text-shadow: 0px 0px 5px #050000;

       }
       .container_ p{
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 0.3px;
        margin: 20px 0;
        
       }
       .container_ span{
        font-size: 12px;
       }
       .container_ a{
        text-decoration: none;
        color: white;
       }
       
       .container_ button{
        width: 25%;
            padding: 2%;
            font-size: 15px;
            background-color: brown;
           border-radius: 50px;
            color: white;
       }
       .container_ button:hover{
        opacity: 0.7; /* Giảm độ mờ khi hover */

       }
       .container_ button.hidden{
        background-color: transparent;
        border-color: #fff;
       }
       .container_ form{
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        height: 100%;
       }
       .container_ input{
        background-color: black;
        margin: 8px 0;
        padding: 10px 15px;
        font-size: 13px;
    border-top: none;
    border-left: none;
    border-right: none;
    
        border-bottom: 0.1px solid white;
        margin-bottom: 3%;
        width: 60%;
        outline: none;
       }
       .form-container_{
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
       }
       .sign-in{
        left: 0;
        width: 50%;
        z-index: 2;
       }

       .container_.active.sign-in{
        transform: translateX(100%);
       }
       .sign-up{
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
       }
       .container_.active .sign-up{
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: move 0.6s;
       }
       @keyframes move{
        0%,
        49.99%{
            opacity: 1;
            z-index: 5;

        }
       }
   

       .toggle-container_{
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transform: all 0.6s ease-in-out;
        border-radius: 150px 0 0 100px;
        z-index: 1000;

       }
       .container_.active .toggle-container_{
        transform: translateX(-100%);
        border-radius: 0 150px 100px 0;
       }
       .toggle{
        background-color: brown;
        height: 100%;
        background: linear-gradient(to right, #d1d1d1,#060606);
        color: #fff;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: all 0.6s ease-in-out;
       }
       .container_.active .toggle{
        transform: translateX(50%);
       }
       .toggle-panel{
        position: absolute;
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 30px;
        text-align: center;
        top: 0;
        transform: translateX(0);
        transition: all 0.6s ease-in-out;
       }
       .toggle-left{
        transform: translateX(-200%);
       }
       .container_.active .toggle-left{
        transform: translateX(0);
       }
       .toggle-right{
        background: linear-gradient(to left, #f9f8f8,#585656);

        right: 0;
        transform: translateX(0);
        
       }
       .container_.active .toggle-right{
        transform: translateX(200%);

    }

    .toggle img {
        width: 50%;
        height: 100%;
    }
    .error {
            text-align: left;
            color: brown;
            display: none;
            margin-top: -10%;
            padding-bottom: 10px;
            padding-top: 20px;
        }

    </style>

        <div class="container_" id="container_">
            <div class="form-container_ sign-up">
                <form action="">
                    <h1>ĐĂNG KÝ</h1>
                    <input type="text" placeholder="Username">
                    <input type="text"placeholder="Số điện thoại">
                    <input type="email"placeholder="Email">
                    <input type="text"placeholder="Địa chỉ">
                    <input type="password" placeholder="Password" name="" id="">
                    <button>Đăng ký</button>
                </form>
            </div>

            <div class="form-container_ sign-in">
                <form action="">
                    <h1>ĐĂNG NHẬP</h1>
                   
                    <input type="username"placeholder="Username">
                    <input type="password" placeholder="Password" name="" id="">
                   
                    
                    <button>Đăng nhập</button>
                </form>
            </div>

            <div class="toggle-container_">
                <div class="toggle">
                    <img src="/FPT-duan1/img/mau.jpg" alt="">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Bạn đã có tài khoản? Đăng nhập ngay.</p>
                        <button class="hidden" id="login">Đăng nhập</button>
                    </div>
                    
                    <div class="toggle-panel toggle-right">
                        <h1>Hello!!</h1> <br>
                        <a href="#">Quên mật khẩu?</a>
                        <p>Bạn chưa có tài khoản? Đăng ký ngay.</p>
                        <button class="hidden" id="register">Đăng ký</button>
                    </div>
                    


                </div>
            </div>
           
        </div>
           
        </div>
    </div>
    <script src="/FPT-duan1/view/style/scrip.js"></script>
</body>
</html>