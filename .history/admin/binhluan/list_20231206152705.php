<?php
session_start();
?>
<div class="row">

<div class="row frmtitle">
    <H1>Danh Sách Bình luận</H1>
</div>
<div class="row mb10 frmdsloai">
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nội dung</th>
            <th>IDPRO</th>
            <th>IDUSER</th>
            <th>Ngày bình luận</th>
            <th></th>
        </tr>
        <?php
        foreach ($listbinhluan as $binhluan) {

            extract($binhluan);
            $suabl = "index.php?act=suabl&id=".$id;
            $xoabl = "index.php?act=xoabl&id=".$id;
            $imgpath= "../upload/".$imgdm;
            if(is_file($imgpath)){
                $hinh = "<img src='".$imgpath."' height='80'>";
            }else{
                $hinh = "No photo";
            }
            echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $comment . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $daycomment . '</td>
                    <td><a  href="' . $suabl . '"> <input class="btn-act" type="button" value="Sửa"></a> 
                    <a href="' . $xoabl . '"><input class="btn-act" type="button" value="xoá"></a></td>
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
</div>
<div class="row formcontent">
</div>
</div>
