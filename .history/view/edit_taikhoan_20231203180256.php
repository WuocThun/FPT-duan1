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
      
      .container_ input[type="submit"]{
       width: 25%;
           padding: 2%;
           font-size: 15px;
           background-color: brown;
          border-radius: 50px;
           color: white;
      }
      
      .container_ input[type="submit"]:hover{
       opacity: 0.7; /* Giảm độ mờ khi hover */

      }
      .container_ button.hidden{
       background-color: transparent;
       border: 0.5px solid #fff;   
       width: 25%;
        padding: 2%;
       font-size: 16px;
       border-radius: 50px;
        color: white;
      }
      .container_ button.hidden:hover{
       opacity: 0.7; /* Giảm độ mờ khi hover */

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
       margin: 5px 0;
       color: white;
       font-size: 12px;
       border-top: none;
       border-left: none;
       border-right: none;
       border-bottom: 0.1px solid white;
       margin-bottom: 2%;
       width: 65%;
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
            color: brown;
           display: none;
           margin-top: -10%;
           padding-bottom: 20px;
           padding-top: 30px;
   }
  

   </style>
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
<!-- <?
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $error = [];
//     if (empty($_POST['user'])) {
//         $error['user']['require'] = 'Tên đăng nhập không được để trống';
//     }
//     else {
//         if (strlen(trim($_POST['user'])) < 5) {
//             $error['user']['require'] = 'Tên phải hơn 5 ký tự';
//         }
//     }
// }
?> -->
<div class="tongfr">
    <div class="fr"><img id="image" onclick="changeImage1()" src="img/fr2.png" alt=""></div>
    <div id="_form" class="_form">
        <?php
        extract ($_SESSION['userdn']);
        ?>
        <h1>Chỉnh sửa tài khoản, <?=$user?></h1>
<?php
if (isset($_SESSION['userdn'])&& (is_array($_SESSION['userdn']))) {
    extract($_SESSION['userdn']);
}
?>
        <form action="index.php?act=edit_taikhoan" method="post">
                        <p>Tài khoản</p>
                        <input type="text" id="name" name="user" value="<?=$user?>" ><br><br>
                        <p>Mật khẩu</p>
                        <input type="text" id="pass" name="pass" value="<?=$pass?>"><br><br>
                        <p>Email</p>
                        <input type="text" id="email" name="email" value="<?=$email?>"><br><br>
                        <p>Số điện thoại</p>
                        <input type="number" id="tel" name="tel" value="<?=$tel?>"><br><br>
                        <p>Địa chỉ</p>
                        <input type="text" name="id" value="<?=$id?>">
                        <input type="text" id="addr" name="addr" value="<?=$addr?>"><br><br>                   
                    <input type="submit" name="capnhat" value="Cập nhật">
                </form>
            </div>
    </div>
</div>

