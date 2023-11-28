<div class="banner">
    <img class="fade" id="img" onclick="changeImage()" src="img/bnn.png" alt="">
</div>

<div class="chu">
    <h1>SUSHI KOKORO</h1> <br>
    <p>Món ăn tinh hoa ẩm thực nhật bản</p>
</div>
<div class=" m-0 p-0 tong1">
    <div class="phu22">
        <div class="trai">
            <!-- <video autoplay loop src="img/pexels-ivan-samkov-8908443 (1080p).mp4"></video> -->
            <video autoplay loop>
                <source src="img/pexels-ivan-samkov-8908443 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="phai">
            <h1>Hãy đến <strong>KOKORO</strong> của chúng tôi.</h1>
            <span>Bạn có muốn chúng tôi dẫn dắt bạn vào hành trình ẩm thực với những món sushi sáng tạo và độc
                        đáo? Chúng tôi tự tin mang đến cho bạn những trải nghiệm ẩm thực đặc sắc.
                        Tại <strong>Cửa hàng sushi KOKORO</strong>, chúng tôi tự hào giới thiệu đến bạn những chiếc
                        sushi độc đáo và tinh tế nhất, được tạo ra từ sự kết hợp tài tình của đầu bếp sushi chuyên
                        nghiệp và nguyên liệu tươi ngon nhất.
                        <br> <br> Cảm ơn bạn đã chọn <strong>Cửa hàng Sushi KOKORO</strong>. Hãy để chúng tôi làm phong
                        phú thêm hành trình ẩm thực của bạn với những hương vị đặc sắc từ đất nước hoa anh đào!
                    </span>

        </div>

    </div>
</div>
<div class="phu222">
    <div class="dau">
        <h1>THỰC ĐƠN</h1>
    </div>


    <br>
    <!-- <div class="sptong">
        <a class="sp" href="index.php?act=sanpham#tile1">
            <img src="img/sashimi.jpg" alt=""><br>
            <h4>SASHIMI</h4> <br>

        </a>
        <a class="sp" href="index.php?act=sanpham#tile2">
            <img src="img/sshi.jpg" alt=""><br>
            <h4>SUSHI</h4> <br>


        </a>
        <a class="sp" href="index.php?act=sanpham#tile3">
            <img src="img/mi.jpg" alt=""><br>
            <h4>RICE/NOODLE <br> (Cơm/Mì)</h4> <br>


        </a>


        <a class="sp" href="index.php?act=sanpham#tile4">
            <img src="img/h1.jpg" alt=""><br>
            <h4>SALAD </h4> <br>


        </a>
        <a class="sp" href="index.php?act=sanpham#tile5">
            <img src="img/combo.png" alt=""><br>
            <h4>COMBO <br> (Sashimi/Sushi)</h4> <br>

        </a>
        <a class="sp" href="index.php?act=sanpham#tile6">
            <img src="img/ruoua.png" alt=""><br>
            <h4>OTHERS <br>(Món khác)</h4> <br>


        </a>
    </div> -->
    <style>
        .radius-img > img{
            border-radius: 50%;
            box-shadow: 0px 0px 5px white;
            width: 130pt;
            margin-left: -2%;
        }
    </style>
    <div class="sptong">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path.$imgdm;
        $linkdm = "index.php?act=sanpham1&iddm=".$id ;
        echo '
            <a class="sp radius-img" href="'.$linkdm.'">
            <img src="'.$hinh.'" height="100px" alt=""> <br>
            <span>'.$namedm.'</span>
    </a>
        ';
    }
    ?>
    </div>

</div>
<div class="chuu">

    <div class="thongtin">
        <video autoplay loop>
            <source src="img/video (2160p).mp4" type="video/mp4">
        </video>
    </div>
    <div class="tt">
        <p>"Chúng tôi xin chân thành gửi lời cảm ơn sâu sắc nhất đến bạn vì đã ủng hộ và tin tưởng sử dụng dịch
            vụ của chúng tôi trong suốt thời gian qua.

            Chúng tôi cam kết sử dụng những
            nguyên liệu tốt nhất và luôn tuân thủ các tiêu chuẩn vệ sinh nghiêm ngặt để đảm bảo rằng bạn luôn có
            được một trải nghiệm ẩm thực an toàn và ngon miệng tại KOKORO.

            Một lần nữa, chúng tôi xin chân thành cảm ơn bạn đã luôn ủng hộ cửa hàng sushi KOKORO, để chúng tôi
            tiếp tục
            đem đến cho bạn những trải nghiệm ẩm thực đáng nhớ."
            <br> <br>
            Chân thành, <br>
            Cửa hàng sushi KOKORO.
        </p>
    </div>
    <div class="ten">
        <h1>Cửa hàng KOKORO</h1>
    </div>

</div>
</div>
<div class="map">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6588.720772367863!2d108.21819943235198!3d16.079538652539835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zMTAgUGhhbiBC4buZaSBDaMOidSwgUS5I4bqjaSBDaMOidSwgVHAuxJDDoCBO4bq1bmc!5e0!3m2!1sen!2sus!4v1694067158572!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


