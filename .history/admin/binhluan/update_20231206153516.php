<?php
if (is_array($dm)){
    extract($dm);
    $imgpath= "../upload/".$imgdm;
    if(is_file($imgpath)){
        $hinh = "<img src='".$imgpath."' height='80'>";
    }else{
        $hinh = "No photo";
    }
}
?>
<div class="row container_dm">
    <style>
        .container_dm {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .text_dm {
            width: 100%;
            text-align: center;
        }

        .btn_container_dm {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .formcontent {
            width: 50% !important;
        }

        .form_dm {
            width: 100%;
            margin: auto;
        }
        .imgpath{
            width: 100px;
            height: 70;
            
        }
    </style>
    <div class="row frmtitle">
        <h1>Cập nhật danh mục</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=suabl" method="post" class="box_dm">
          
            <!-- <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo '<div class="thongbao" >' . $thongbao . '</div>';
            ?> -->
        </form>
    </div>
</div>
</div>
