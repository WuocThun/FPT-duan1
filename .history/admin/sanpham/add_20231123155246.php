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
                <H1>Thêm mới loại hàng hoá</H1>
            </div>
    
            <div class="row formcontent">
                <form class="form_dm" action="index.php?act=addsp" method="post" class="box_dm" enctype="multipart/form-data">
                <select name="iddm" id="">
                        <?php 
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            // echo '<option vlaue="'.$id.'">"'.$namedm.'" </option>';
                            echo '<option value="' . $id . '">' . $namedm . '</option>';
                        }
                    ?>
                  </select>
                    <div class="row mb10 text_dm">
                    Tên món ăn<br>
                    <input type="text" name="namesp">
                    </div>
                    <div class="row mb10 text_dm">
                        Giá món ăn<br>
                        <input placeholder="190.000" type="number" name="pricesp">
                    </div>
                    <div class="row mb10 text_dm">
                        Hình ảnh sản phẩm<br>
                        <input type="file" name="imgsp">
                    </div>
                    <div class="row mb10 text_dm">
                        Mô tả món ăn <br>
                        <textarea name="des" id="" cols="83%" rows="10"></textarea>
                    </div>
                    <div class="row mb20 btn_container_dm">
                        <input type="submit" class="btn_dm" name="themmoi" value="Thêm">
                        <input type="reset" class="btn_dm" value="Nhập lại">
                        <a class="btn_dm" href="index.php?act=listsp"><input class="btn_dm"  type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao != ""))
                        echo '<div class="thongbao" >'.$thongbao.'</div>';
                    ?>
                </form>
            </div>
        </div>
    </div>