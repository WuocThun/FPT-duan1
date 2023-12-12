<div class="row ">
    <div class="row frmtitle">
        <H1>Danh Sách đơn hàng</H1>
    </div>
    <div class="row mb10 frmdsloai">

        <table>
            <tr>
                <th></th>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Số lượng</th>
                <th>Giá trị</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao tác</th>

              
            </tr>
            <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suakh = "index.php?act=suakh&id=".$id;
                        $xoakh = "index.php?act=xoakh&id=".$id;
                        // $hinhpath = "../upload/".$imgsp;
                        // if(is_file($hinhpath)) {
                        //     $hinh ="<img src='".$hinhpath."' height='80'>";
                        // }else {
                        //     $hinh = "No photo";
                        // }
if($role >=1){
    $role = "admin";
}else {
    $role = "Người dùng";
}
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$addr.'</td>
                                <td>'.$role.'</td>
                                <td>
                                    <a href="'.$suakh.'"> <input class="btn-act" type="button" value="Sửa"></a> 
                                    <a href="'.$xoakh.'"><input class="btn-act" type="button" value="xoá"></a>
                                </td>
                                
                            </tr>';
                    }                
                ?>


        </table>
    </div>
    <div class="row mb10">

    </div>
    <div class="row mb20 row_form_btn">
        <!-- <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn"> -->
        <!-- <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> -->
    </div>
    <div class="row formcontent">
    </div>
</div>