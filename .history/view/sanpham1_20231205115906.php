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
<h1>
    <?=$namedm1?>
</h1>       
    </div>
    <hr>
    <style>
    .scr_hv{
  width: 100%;
  height: auto;
  display: grid;
  grid-template-columns: repeat(4,1fr);
  margin-bottom: 5%;
  margin-top: 2%;
  margin-left: -0.3%;

  /* overflow: auto; */
}
.phu2 > img {
  width: 200px;
  height: 200px;
}

.phu2{
    margin: 5%;
  text-align: center;
  box-shadow: 0px 0px 5px white;
}
  .phu2 > p {
  text-decoration: line-through;
  color: white;
}

.phu2 span{
    text-decoration: none;
    color: white;
}
.phu2 {
    text-decoration: none;
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
 margin-bottom: 5%;
 width: 50%;
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
                      <span>' . $namesp . ' </span>  <br>
                       <span>' . $newpricesp . '.000đ/Phần </span> <br>
                    <p>' . $pricesp . '.000</p> 
                    <button class="btn">Mua Ngay</button>
                </a> 
                ';
        }
        ?>
    </div>