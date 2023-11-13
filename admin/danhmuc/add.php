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
    </style>
            <div class="row frmtitle">
                <H1>Thêm mới loại danh mục</H1>
            </div>
                <style>
                    .formcontent {
                        width: 50% !important;
                    }
                    .form_dm {
                        width: 100%;
                        margin: auto;
                    }
                </style>
            <div class="row formcontent">
                <form enctype="multipart/form-data" class="form_dm" action="index.php?act=adddm" method="post" class="box_dm">
                    <div class="row mb10 text_dm">
                    Tên Danh Mục<br>
                    <input type="text" name="namedm">
                    </div>
                    <div class="row mb10 text_dm">
                        Ảnh Danh mục<br>
                        <input type="file" name="imgdm">
                    </div>
                    <div class="row mb20 btn_container_dm">
                        <input type="submit" class="btn_dm" name="themmoi" value="Thêm">
                        <input type="submit" class="btn_dm" value="Nhập lại">
                        <a class="btn_dm" href="index.php?act=listdm"><input class="btn_dm"  type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao != ""))
                        echo '<div class="thongbao" >'.$thongbao.'</div>';
                    ?>
                </form>
            </div>
        </div>
    </div>