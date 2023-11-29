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
        <h1>ĐĂNG KÝ</h1>
        <form onsubmit="" action="" method="post">
            <div class="mb">
                <input value="<?php echo (!empty($_POST['user']))? $_POST['user']:false?>" type="text" name="user" id="name" placeholder="Username"><br>
                 <?php
                    echo (!empty($error['user']['require'])) ? '
                    <span style="color:red">' . $error['user']['require'] . ' </span>
                    ' : false;
                 ?> 
                <br>
                <div id="nameError" class="error"></div>
            </div>
            <div class="mb">
                <input value="<?php echo (!empty($_POST['pass']))? $_POST['pass']:false?>" type="text" id="pass" name="pass" placeholder="Password"> <br>
                <?php
                    echo (!empty($error['pass']['require'])) ? '
                    <span style="color:red">' . $error['pass']['require'] . ' </span>
                    ' : false;
                 ?> <br>
                <div id="passwordError" class="error"></div>
            </div>
            <div class="mb">
                <input type="text" id="email" name="email" placeholder="Email"><br>
                <div id="emailError" class="error"></div>
            </div>
            <div class="mb">
                <input type="text" id="addr" name="addr" placeholder="Address"><br>
                <div id="addressError" class="error"></div>
            </div>
            <div class="mb">
                <input type="number" id="phone" name="tel" placeholder="Phone"><br>
                <div id="phoneError" class="error"></div>
            </div>
           
            <input type="submit" onsubmit="return dangky()" name="dangky" value="Đăng ký">
            <input type="reset" value="Nhập lại"><br>
            Bạn chưa đã có tài khoản? Vui lòng <a href="index.php?act=dangnhap"> Đăng nhập</a>

        </form>
        <?php
        if(isset($thongbao) && ($thongbao!="")){
                                echo '<h3 style="color:red;margin:20px">'.$thongbao.'</h3>';
                            }?> 
    </div>
</div>
<!-- <script>
    function dangky() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("pass").value;
    var address = document.getElementById("addr").value;

    // Đặt các thẻ div lỗi ban đầu thành rỗng và ẩn đi
        var errorContainers = document.querySelectorAll(".error");
        errorContainers.forEach(function (errorContainer) {
        errorContainer.textContent = "";
        errorContainer.style.display = "none";
    });

    var hasError = false;

    // Kiểm tra xem ô input 'name' không được để trống
    if (name === "") {
        var nameError = document.getElementById("nameError");
        nameError.textContent = "Vui lòng nhập tên người dùng.";
        nameError.style.display = "block";
        hasError = true;
    }

    // Kiểm tra định dạng email
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        var emailError = document.getElementById("emailError");
        emailError.textContent = "Email không hợp lệ.";
        emailError.style.display = "block";
        hasError = true;
    }
    if (phone.length !== 10 || /^[1-9]\d{9}$/.test(phone)) {
        var phoneError = document.getElementById("phoneError");
        phoneError.textContent = "Số điện thoại phải có đúng 10 số và bắt đầu bằng số 0.";
        phoneError.style.display = "block";
        hasError = true;
    }
    
      if (address === "") {
        var addressError = document.getElementById("addressError");
        addressError.textContent = "Vui lòng nhập địa chỉ.";
        addressError.style.display = "block";
        hasError = true;
    }

    // Kiểm tra ô input 'password' có ít nhất 3 ký tự
    if (password.length < 3) {
        var passwordError = document.getElementById("passwordError");
        passwordError.textContent = "Mật khẩu phải có ít nhất 3 ký tự.";
        passwordError.style.display = "block";
        hasError = true;
    }
    

    if (hasError) {
        return false;
    }
    alert ("đăng ký thành công thành công");

    return true;
}
</script> -->

<!-- <script src="../view//style/scrip.js"></script> -->
<!-- <script src="/FPT-duan1/view/style/scrip.js">   </script> -->
