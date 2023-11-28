<div class="banner">

    <video autoplay loop src="img/pexels-rodnae-productions-6645788 (Original).mp4"></video>

</div>
<style>
    .banner video{
        margin-top: -10%;
    }
</style>
<div class="ds">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path . $imgdm;
        $linkdm = "index.php?act=sanpham1&iddm=" . $id;
        echo '
            <a class="mon" href="' . $linkdm . '">
            <img src="' . $hinh . '" height="100px" alt=""> <br>
            <span>' . $namedm . '</span>
    </a>
        ';
    }
    ?>
</div>
<div>
    <div id="tile1" class="muc">
        <?=$tendm
        ?>
       
    </div>
    <hr>
    <style>
        .scr_hv {
            overflow: auto;
            white-space: nowrap;
        }
        .btn{
         background-color: black;
        display: inline-block;
        padding: 0.4rem 1.0rem;
        font-size: 15px;
        font-weight: 700;
        color: rgb(231, 218, 218);
        border: 3px solid brown;
        cursor: pointer;
        position: relative;
        text-decoration: none;
        overflow: hidden;
        z-index: 1;
        font-family: inherit;
        }

        .btn::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(197, 4, 49);
        transform: translateX(-100%);
        transition: all .3s;
        z-index: -1;
        }

        .btn:hover::before {
        transform: translateX(0);
}
    </style>
    <div class="tong2 scr_hv">
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $hinh = $img_path . $imgsp;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '
                    <a class="phu2" href="' . $linksp . '">
                    <img src="' . $hinh . '" alt=""><br>
                        ' . $namesp . '  <br>
                        ' . $newpricesp . '.000đ/Phần <br>
                    <p>' . $pricesp . '.000</p> 
                    <button class="btn">Mua Ngay</button>
                </a> 
                ';
        }
        ?>

    </div>