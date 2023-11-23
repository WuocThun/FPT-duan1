
<div class="banner">
    <!-- <img src="img/ssbn.jpg" alt=""> -->
    <video autoplay loop src="img/pexels-rodnae-productions-6645788 (Original).mp4"></video>

</div>
<div class="ds">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path.$img;
        echo '
            <a class="mon" href="#tile1">
            <img src="'.$hinh.'" width="25px" alt=""> <br>
            <span>'.$namedm.'</span>
    </a>
        ';
    }
    ?>
</div>
<div>
    <div id="tile1" class="muc">
        <h1>SASHIMI</h1>
    </div>
    <hr>
<style>
    .scr_hv{
  overflow: auto;
  white-space: nowrap;
}
</style>
    <div class="tong2 scr_hv">
        <?php
                foreach ($spnew as $sp ){
                    extract($sp);
                    $hinh = $img_path.$img;
                    echo '
                    <a class="phu2" href="index.php?act=sanphamct">
                    <img src="'.$hinh.'" alt=""><br>
                        '.$namesp.'  <br>
                        '.$newpricesp.'.000đ/Phần <br>
                    <p>'.$pricesp.'.000</p> 
                    <button>Mua Ngay</button>
                </a> 
                ';
                }
            ?>
         
    </div>

    <div class="tong2">
        <a class="phu2" href="index.php?act=sanphamct">
            <img src="img/sashimiaa.jpg" alt=""><br>
            Sashimi cá thu (Saba) <br>
            120.000đ/Phần <br>
            <p>180.000đ</p>
            <button>Mua Ngay</button>
            </a>
    </div>
</div>
<!--        <div>-->
<!--        <div id="tile2" class="muc2">-->
<!--            <hr>-->
<!--            <br>-->
<!--            <h1>SUSHI</h1>-->
<!--            <br>-->
<!--            <hr>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushia.jpg" alt=""><br>-->
<!--               Nigiri Sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushib.png" alt=""><br>-->
<!--               Inari sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushic.jpg" alt=""><br>-->
<!--               Gunkanmaki sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushid.png" alt=""><br>-->
<!--               Temari sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushiaa.jpg" alt=""><br>-->
<!--               Futomaki sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushibb.jpg" alt=""><br>-->
<!--               Hosomaki sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushicc.png" alt=""><br>-->
<!--               Temaki sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/sushidd.JPG" alt=""><br>-->
<!--               Oshi sushi  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div id="tile3" class="muc2">-->
<!--            <hr>-->
<!--            <br>-->
<!--            <h1>NOODLE</h1>-->
<!--            <br>-->
<!--            <hr>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/mia.png" alt=""><br>-->
<!--               Mì Soba  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/mib.png" alt=""><br>-->
<!--               Mì Udon  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/mic.png" alt=""><br>-->
<!--               Mì Ramen  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/mid.png" alt=""><br>-->
<!--               Mì Shirataki  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/miaa.png" alt=""><br>-->
<!--               Mì Yakisoba   <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/mibb.png" alt=""><br>-->
<!--               Mì Hiyashi Chuka  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/micc.png" alt=""><br>-->
<!--               Mì Somen  <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/midd.png" alt=""><br>-->
<!--               Mì Harusame <br>-->
<!--                120.000đ/Phần<br>-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--      -->
<!--        <div id="tile4" class="muc2">-->
<!--            <hr>-->
<!--            <br>-->
<!--            <h1>SALAD</h1>-->
<!--            <br>-->
<!--            <hr>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/salada.png" alt=""><br>-->
<!--                Salad wakame<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladb.png" alt=""><br>-->
<!--                Salad thịt gà<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladc.png" alt=""><br>-->
<!--                Salad đậu phụ <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladd.png" alt=""><br>-->
<!--                Salad hải sản<br>-->
<!--                120.000đ/Phần<br>-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladaa.png" alt=""><br>-->
<!--                Salad thịt giăm bông sống<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladbb.png" alt=""><br>-->
<!--                Sốt mè rang <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladcc.png" alt=""><br>-->
<!--                Sốt kiểu Nhật <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/saladdd.png" alt=""><br>-->
<!--                Sốt kiểu Pháp <br>-->
<!--                120.000đ/Phần<br>-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div id="tile5" class="muc2">-->
<!--            <hr>-->
<!--            <br>-->
<!--            <h1>COMBO</h1>-->
<!--            <br>-->
<!--            <hr>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/seta.png" alt=""><br>-->
<!--                Combo sushi sashimi cỡ vừa<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setb.png" alt=""><br>-->
<!--                Combo sushi cỡ nhỏ<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setc.png" alt=""><br>-->
<!--               Combo sashimi 1 người (bạch tuộc, cá hồi) <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setd.png" alt=""><br>-->
<!--                Combo sushi cỡ lớn <br>-->
<!--                120.000đ/Phần<br>  -->
<!--                <!-- phần này bỏ trong div chia div ra xong cho div này max-width:100px cho nó bóp lại-->-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setaa.png" alt=""><br>-->
<!--               <span> Salad + nước sốt mè rang<br>-->
<!--                120.000đ/Phần <br></span>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setbb.png" alt=""><br>-->
<!--                Salad bơ thanh cua + nước sốt mè rang <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setcc.png" alt=""><br>-->
<!--                Mì Udon (Combo 2 người) <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/setdd.png" alt=""><br>-->
<!--                Combo sushi cá hồi<br>-->
<!--                120.000đ/Phần<br>-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div id="tile6" class="muc2">-->
<!--            <hr>-->
<!--            <br>-->
<!--            <h1>OTHERS</h1>-->
<!--            <br>-->
<!--            <hr>-->
<!--        </div>-->
<!--        <div class="tong2">-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/ruoua.png" alt=""><br>-->
<!--                Rượu Sake Nhật (Nihonshu)<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/ruoub.png" alt=""><br>-->
<!--                Rượu Shochu Nhật<br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/ruouc.png" alt=""><br>-->
<!--                Rượu Whisky Nhật                <br>-->
<!--                120.000đ/Phần <br>-->
<!--                <p>180.000đ</p>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--            <a class="phu2" href="index.php?act=sanphamct">-->
<!--                <img src="img/ruoud.png" alt=""><br>-->
<!--                Rượu mơ Nhật Bản (Umeshu)<br>-->
<!--                120.000đ/Phần<br>-->
<!--                <p>180.000đ</p><br>-->
<!--                <button>Mua Ngay</button>-->
<!--            </a>-->
<!--        -->
<!--        </div>-->
</div>
<br>
<hr>