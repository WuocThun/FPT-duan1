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
    - Ngày đặt hàng <?=$bill['ngaydathang']?> ,000
</li>
<li>
    - tổng đơn hàng <?=$bill['total']?>
</li>
<?php
if($bill['bill_pttt']=1)
{
echo '
<li>
    - phương thức thanh toán: Thanh toán sau khi nhận hàng
</li>
';
}elseif($bill['bill_pttt']=2){
    echo '
<li>
    - phương thức thanh toán: Thanh toán Online
</li>
';
}
?>

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
        <td><?=$bill['bill_tel']?>
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
    <table>
    <?php 
        bill_chitiet($billct);
    ?>
    </table>
</div>
<style>

    *{
        color: white;
    }

</style>