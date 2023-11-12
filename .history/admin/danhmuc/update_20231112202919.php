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
        <form class="form_dm" action="index.php?act=updatedm" enctype="multipart/form-data" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Tên Danh Mục<br>
                <input type="text" name="namedm" value="<?php if(isset($namedm)&& ($namedm!="")) echo $namedm ?>">
            </div>
            <div class="row mb10 text_dm">
                Ảnh Danh mục<br>
                <input type="file" name="imgdm"> </br>
                <div class="imgpath">
               <?php 
               echo '<img src=""></img>'
               ?>               
            </div>
            <div class="row mb20 btn_container_dm">
            <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">

                <input type="submit" class="btn_dm" name="capnhat" value="Cập nhật">
                <input type="submit" class="btn_dm" value="Nhập lại">
                <a class="btn_dm" href="index.php?act=listdm">
                <input class="btn_dm" type="button" value="Danh Sách"></a>
            </div>
            <!-- <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo '<div class="thongbao" >' . $thongbao . '</div>';
            ?> -->
        </form>
    </div>
</div>
</div>
