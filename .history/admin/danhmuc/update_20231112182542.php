<!-- <?php
if (is_array($dm)){
    extract($dm);
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
    </style>
    <div class="row frmtitle">
        <h1>Cập nhật danh mục</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=updatedm" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Tên Danh Mục<br>
                <input type="text" name="namedm" value=""<?php if (isset($namedm) && ($namedm != "")) echo $namedm ?>"">
            </div>
            <div class="row mb10 text_dm">
                Ảnh Danh mục<br>
                <input type="text" name="imgdm" value="<?php $imgdm ?>">
            </div>
            <div class="row mb20 btn_container_dm">
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
</div> -->
<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>
<div class="row ">
            <div class="row frmtitle">
                <H1>Cập nhập loại hàng hoá</H1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($namedm)&& ($namedm!="")) echo $namedm ?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
                        <input type="submit" name="capnhat" value="Cập Nhật">
                        <input type="submit" value="Nhập lại">
                        <a href="index.php?act="><input type="button" value="Danh Sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>