<?php
if(isset($bill)&&(is_array($bill))){
    extract ($bill);
}
?>
<div>
<li>
    KOKORO <?=$bill['id']?>
</li>
<li>
    - Ngày đặt hàng <?=$bill['ngaydathang']?>
</li>
<li>
    - tổng đơn hàng <?=$bill['total']?>
</li>
<li>
    - phương thức thanh toán <?=$bill['bill_pttt']?>
</li>
</div>
<div>
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
</div>
<div>
    <?php 
        show_chitiet_bill($billct);
    
    ?>


</div>