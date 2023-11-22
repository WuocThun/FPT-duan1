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






