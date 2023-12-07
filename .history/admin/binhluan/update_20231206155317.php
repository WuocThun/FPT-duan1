<?php

    extract($binhluan);
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
        height: 70;

    }
    </style>
    <div class="row frmtitle">
        <h1>Cập nhật danh mục</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=suabl" method="post" class="box_dm">
            <input type="text" name="comment" value="<?=$comment?>">
            <input type="text" name="comment" value="<?=$id?>">

            <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
            <input type="submit" class="btn_dm" name="capnhat" value="Cập nhật">
             <a class="btn_dm" href="index.php?act=dsbl">
                <input class="btn_dm" type="button" value="Danh Sách"></a>
        </form>
    </div>
</div>
</div>