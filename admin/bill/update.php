<?php
if(is_array($billone)) {
        extract($billone);
    };
$ttdh = get_ttdh($billone['bill_status']);

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
        <h1>Cập nhật đơn hàng</h1>
    </div>

    <div class="row formcontent">
        <form class="form_dm" action="index.php?act=updatebill" method="post" class="box_dm">
            <div class="row mb10 text_dm">
                Mã đơn hàng<br>
                <input type="text" name="id" readonly value="KOKORO- <?=$id?>">
            </div>
            <div class="row mb10 text_dm">
                Tình trạng đơn hàng <br>
                <input type="text" name="id" readonly value=" <?=$ttdh?>">

                    <input type="radio" name="bill_status" id="" value="0" checked>Đơn hàng mới <br>
                     <input type="radio" name="bill_status" id="" value="1" >Đang xử lí <br>
                     <input type="radio" name="bill_status" id="" value="2" >Đang giao hàng <br>
                     <input type="radio" name="bill_status" id="" value="3" >Đã giao hàng <br>
            </div>


            <div class="row mb20 btn_container_dm">
                <br> <input type="hidden" name="id" value="<?php if(isset($id)&& ($id >0)) echo $id ?>">
                <input type="submit" class="btn_dm" name="capnhat" value="Cập nhật">
                <!-- <input type="submit" class="btn_dm" value="Nhập lại"> -->
                <a class="btn_dm" href="index.php?act=listbill">
                    <input class="btn_dm" type="button" value="Danh Sách"></a>
            </div>
        </form>
    </div>
</div>
</div>