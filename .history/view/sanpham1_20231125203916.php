
<div class="banner">
    <!-- <img src="img/ssbn.jpg" alt=""> -->
    <video autoplay loop src="img/pexels-rodnae-productions-6645788 (Original).mp4"></video>

</div>
<div class="ds">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path.$imgdm;
        $linkdm = "index.php?act=sanpham&idddm".$id ;
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
    <!-- <?php
    // foreach ($d1dm as $d1) {
    //     extract ($d1);
    //     echo '
    //     <div id="tile1" class="muc">
    //     <h1>'.$namedm.'</h1>
    // </div>
    //     ';
    // }
    ?> -->
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
