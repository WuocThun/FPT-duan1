<div class="row ">
    <div class="row frmtitle">
        <H1>Danh Sách đơn hàng</H1>
    </div>
    <div class="row mb10 frmdsloai">

        <table>
            <tr>
                <td></td>
                <td>Mã đơn hàng</td>
                <td>Khách hàng</td>
                <td>Địa chỉ</td>
                <td>Số điện thoại</td>
                <td>Số lượng</td>
                <td>Giá trị</td>
                <td>Tình trạng đơn hàng</td>
                <td>Thao tác</td>
                <td></td>
              
            </tr>
            <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh = '
                        <td>'.$bill['name'].'</td>
                        <td>'.$bill['addr'].'</td>
                        <td>'.$bil;['tel'].'</td>
                        ';
                        $countsp = loadall_cart_cout($bill['id']);
                        $ttdh = 
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>KOKORO- '.$bill['id'].'></td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>Tình trạng đơn hàng</td>
                                <td>Thao tác</td>
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