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
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Số lượng</th>
                <th>Giá trị</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao tác</th>
                <th></th>
              
            </tr>
            <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh = '
                        <th>'.$bill['name'].'</th>
                        <th>'.$bill['addr'].'</th>
                        <th>'.$bil;['tel'].'</th>
                        ';
                        $countsp = loadall_cart_cout($bill['id']);
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <th>KOKORO- '.$bill['id'].'></th>
                                <th>Số lượng</th>
                                <th>Giá trị</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Thao tác</th>
                                <th>
                                    <a href="'.$suakh.'"> <input class="btn-act" type="button" value="Sửa"></a> 
                                    <a href="'.$xoakh.'"><input class="btn-act" type="button" value="xoá"></a>
                                </th>
                                
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