<?php
if(isset($bill)&&(is_array($bill))){
    extract ($bill);
}
?>

<div class="tongxn">
<div class="thongtin">
<table>
    <tr>
        <td>Người đặt hàng: </td>
        <td><?=$bill['bill_name']?>
        </td>
    </tr>
    <tr>
        <td>Số điện thoại: </td>
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

<div class="thongtin">

<li>
    KOKORO <?=$bill['id']?>
</li>
<li>

    - Ngày đặt hàng <?=$bill['ngaydathang']?> 
</li>
<li>
    - tổng đơn hàng <?=$bill['total']?>,000

    Ngày đặt hàng: <?=$bill['ngaydathang']?> 
</li>
<li>
    Tổng đơn hàng:<?=$bill['total']?>,000

</li>
<?php
if($bill['bill_pttt']!=1)
{
    echo '
    <li>

        - phương thức thanh toán: Thanh toán Online

        Phương thức thanh toán: Thanh toán Online

    </li>
    ';
}else{
    echo '
<li>

    - phương thức thanh toán: Thanh toán sau khi nhận hàng

    Phương thức thanh toán: Thanh toán sau khi nhận hàng

</li>
';
 
}
?>

</div>

<div>
<table>
    <tr>
        <td>Người đặt hàng: </td>
        <td><?=$bill['bill_name']?>
        </td>
    </tr>
    <tr>
        <td>số điện thoại: </td>
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

</div>
<div class="_table">

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



</div>
<style>


    .tongxn{
        color: white;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        margin-top: 20px;
    
    }
    .thongtin{
        flex-direction: column;
        line-height: 2;
        width: 30%;
        display: flex;
        justify-content: center;
     
    }
    .thongtin li{
        list-style-type: none;
    }
    /* ._table{
        line-height: 2;
    } */
    ._table table,._table tr,._table td{
        border: none;
        border-collapse: collapse;
    }

    ._table table,._table span{
        display: flex;
        justify-content: center;
        text-align: center;
        color: white;
    }
    ._table span{
        margin-bottom: 20px;
    }
    ._table tr td{
        padding: 25px;
    }


    ._table tr td:nth-child(1){
        width: 350px;
        height: 100px;
    } 
    ._table tr:nth-child(1){
        color: brown;
        font-weight: bold;
        background-color: white;
        width: 300px;
        border-bottom: 1px solid black;
    }
    ._table tr td:nth-child(2){
    width: 200px;    
    }
    ._table tr:hover{
        color: black;
        background-color: white;
    }
        ._table tr th{  
            height: 100px;
        }

    

</style>