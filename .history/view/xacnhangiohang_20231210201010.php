<?php
if(isset($bill)&&(is_array($bill))){
    extract ($bill);
}
?>
<li>
    KOKORO <?=$bill['id']?>
</li>
<li>
    Ngày đặt hàng <?=$bill['ngaydathang']?>
</li>
<li>
    Ngày đặt hàng <?=$bill['ngaydathang']?>
</li>
<table>
    <tr>
        <td>Người đặt hàng</td>
        <td><?=$bill['bill_name']?>
        </td>
    </tr>
    <tr>
        <td>số điện thoại</td>
        <td><?=$bill['bill_tell']?>
        </td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><?=$bill['bill_addr']?>
        </td>
    </tr>
  
</table>