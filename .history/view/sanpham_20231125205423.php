
<div class="banner">
    <!-- <img src="img/ssbn.jpg" alt=""> -->
    <video autoplay loop src="img/pexels-rodnae-productions-6645788 (Original).mp4"></video>

</div>
<div class="ds">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path.$imgdm;
        $linkdm = "index.php?act=sanpham1&iddm=".$id ;
        echo '
            <a class="mon" href="'.$linkdm.'">
            <img src="'.$hinh.'" height="100px" alt=""> <br>
            <span>'.$namedm.'</span>
    </a>
        ';
    }
    ?>
</div>
<div>
<div id="tile1" class="muc">
        <h1>TOP 10</h1>
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
                    $hinh = $img_path.$imgsp;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    echo '
                    <a class="phu2" href="'.$linksp.'">
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
</div>
<br>
<hr>