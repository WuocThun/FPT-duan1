// chạy tự động 
var index = 1;
function changeImage() {
    var imgs = ["img/bnn.png", "img/bn1.png","img/bn2.png"];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == 3){
        index =0;
    }
    
}
//gọi một hàm trong khoảng thời gian xác định (tính bằng mili giây).
setInterval(changeImage,3000);
 

// chạy tự động 

function changeImage1() {
    var imgs = ["img/fr2.png", "img/fr3.png","img/fr1.png"];
    document.getElementById('image').src = imgs[index];
    index++;
    if(index == 3){
        index =0;
    }
}
//gọi một hàm trong khoảng thời gian xác định (tính bằng mili giây).
setInterval(changeImage1,2000);


function dangky() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("pass").value;
    var address = document.getElementById("addrr").value;

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
function dangnhap(){
    var name = document.getElementById("namedn").value;
    var password = document.getElementById("passdn").value;

     // Đặt các thẻ div lỗi ban đầu thành rỗng và ẩn đi
     var errorContainers = document.querySelectorAll(".error");
     errorContainers.forEach(function (errorContainer) {
     errorContainer.textContent = "";
     errorContainer.style.display = "none";
 });
  
 var hasError = false;

 if (name === "") {
    var nameError = document.getElementById("nameError");
    nameError.textContent = "Vui lòng nhập tên người dùng.";
    nameError.style.display = "block";
    hasError = true;
}

if (password.length < 3) {
    var passwordError = document.getElementById("passError");
    passwordError.textContent = "Mật khẩu phải có ít nhất 3 ký tự.";
    passwordError.style.display = "block";
    hasError = true;
}
if (hasError) {
   
    return false;
   
}
alert ("đăng nhập thành công");
return true;
}