<?php
if(is_array($tk)) {
        extract($tk);
    };
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

    .imgpath {
        width: 100px;
        height: 70px;

    }
    </style>
    <div class="row frmtitle">
        <h1>Cập nhật Tài khoản</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=updatekh" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Tên tài khoản<br>
                <input type="text" name="user" value="<?=$user?>">
            </div>
            <div class="row mb10 text_dm">
                Họ và tên <br>
                <input type="text" name="nameuser" value="<?=$nameuser?>">
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
                <input type="text" name="addr" value="<?=$addr?>">
            </div>

            <div class="row mb10 text_dm">
                Phân quyền <br>
                <table>
                    <td>
                    <td><input type="radio" name="role" id="" value="1" checked>Admin</td>
                     <td><input type="radio" name="role" id="" value="0" >Người dùng </td>
                    </td>
                </table>
            </div>


            <div class="row mb20 btn_container_dm">
                <br> <input type="text" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
                <input type="submit" class="btn_dm" name="capnhat" value="Cập nhật">
                <input type="submit" class="btn_dm" value="Nhập lại">
                <a class="btn_dm" href="index.php?act=dskh">
                    <input class="btn_dm" type="button" value="Danh Sách"></a>
            </div>
        </form>
    </div>
</div>
</div>