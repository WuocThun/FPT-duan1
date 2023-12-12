<div class="row ">
    <div class="row frmtitle">
        <H1>Danh Sách đơn hàng</H1>
    </div>
    <div class="row mb10 frmdsloai">
        <form action="index.php?act=listbill" method="post">    
            <input type="text" name="kyw" placeholder="ID BILL" >
            <input type="submit" name="listok" id="">
        </form>
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên Khách hàng</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Số lượng</th>
                <th>Giá trị</th>
                <th>Tình trạng đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Thao tác</th>
            </tr>
             <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $xoabill ="index.php?act=xoabill&id=".$id ;
                        $suabill ="index.php?act=suabill&id=".$id ;
                        $kh = '
                        '.$bill["bill_name"].'
                        <td>'.$bill["bill_addr"].'</td>
                        <td>'.$bill["bill_tel"].'</td>
                        ';
                        $countsp = loadall_cart_cout($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                        echo ' <tr>
                                <td>KOKORO- '.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].',000</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>
                                <a href="'.$suabill.'"><input class="btn-act" type="button" value="Sửa"></a>
                                <a href="'.$xoabill.'"><input class="btn-act" type="button" value="xoá"></a>
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