<?php
extract ($doaloneTk)
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
        <h1>Cập nhật Tài khoản</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=updatekh" enctype="multipart/form-data" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Tên tài khoản<br>
                <input type="text" name="user" value="<?=$user ?>">
            </div>
            <div class="row mb10 text_dm">
                Pass <br>
                <input type="text" name="pass" value="<?=$pass?>">
            </div>
            <div class="row mb10 text_dm">
                Email <br>
                <input type="text" name="email" value="<?=$email?>">
            </div>
            <div class="row mb10 text_dm">
                Tel <br>
                <input type="number" name="tel" value="<?=$tel?>">
            </div>
            <div class="row mb10 text_dm">
                Địa chỉ <br>
                <input type="number" name="addr" value="<?=$addr?>">
            </div>
            <div class="row mb10 text_dm">
                Phân quyền <br>
                <select name="role" id="">
                <option aria-valuemin="1" type="radio" name="addr" value="<?=$role?>">
                </select>
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
