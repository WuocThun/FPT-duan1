<?php
<div class="row">

<div class="row frmtitle">
    <H1>Danh Sách Loại danh mục</H1>
</div>
<div class="row mb10 frmdsloai">
    <table>
        <tr>
            <th></th>
            <th>Mã loại</th>
            <th>Tên Danh mục</th>
            <th>Ảnh Danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=".$id;
            $xoadm = "index.php?act=xoadm&id=".$id;
            $imgpath= "../upload/".$imgdm;
            if(is_file($imgpath)){
                $hinh = "<img src='".$imgpath."' height='80'>";
            }else{
                $hinh = "No photo";
            }
            echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $namedm . '</td>
                    <td>' . $hinh . '</td>
                    <td><a  href="' . $suadm . '"> <input class="btn-act" type="button" value="Sửa"></a> 
                    <a href="' . $xoadm . '"><input class="btn-act" type="button" value="xoá"></a></td>
                </tr>';
        }
        ?>


    </table>
</div>
<div class="row mb10">

</div>
<div class="row mb20 row_form_btn">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xoá các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
</div>
<div class="row formcontent">
</div>
</div>
?>