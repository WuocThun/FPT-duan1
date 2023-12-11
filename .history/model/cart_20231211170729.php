<?php
function view_cart(){
    global  $img_path;
    $tong = 0;
    $i= 0;

        echo '      

        <tr>
        <td>Ảnh món ăn</td>
        <td>Tên món ăn<br>
        <td>Giá<br>
        <td>Số lượng<br>
        <td>Thành tiền<br>
        </td>
        <td></td>
    </tr>';

    foreach ($_SESSION['mycart'] as $cart){
        $hinhsp = $img_path.$cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp= '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"></a>';
       
        echo '
        
        <tr>
        <td><img src="'.$hinhsp.'" height="80px" alt=""></td>
        <td>'.$cart[1].'<br>
        <td>'.$cart[3].',000<br>
        <td>'.$cart[4].'<br>
        <td>'.$ttien.',000<br>
        </td>
         <td>'.$xoasp.'</td>
    </tr>
    ';
    $i+=1;

}

echo'
<span>Tổng tiền:'.$tong.',000</span> 
<a href="index.php?act=thanhtoan"><button>Thanh toán</button></a>
';
}

function bill_chitiet($listbill){
    global  $img_path;
    $tong = 0;
    $i= 0;

        echo '      

        <tr>
        <td>Ảnh món ăn</td>
        <td>Tên món ăn<br>
        <td>Giá<br>
        <td>Số lượng<br>
        <td>Thành tiền<br>
        </td>
        <td></td>
    </tr>';

    foreach ($listbill as $cart){
        $hinhsp = $img_path.$cart['img'];
        // $ttien = $cart['price'] * $cart['soluong'];
        $tong += $cart['thanhtien'];       
        echo '
        
        <tr>
        <td><img src="'.$hinhsp.'" height="80px" alt=""></td>
        <td>'.$cart['name'].'<br>
        <td>'.$cart['price'].',000<br>
        <td>'.$cart['soluong'].'<br>
        <td>'.$cart['thanhtien'].',000<br>
        </td>
    </tr>

    ';
    $i+=1;

}

echo'
<span>Tổng tiền:'.$tong.',000</span> 
';
}
function view_cart_noPay() {
    global  $img_path;
    $tong = 0;
    $i= 0;

        echo '      
        <tr>
        <td>Ảnh món ăn</td>
        <td>Tên món ăn </td>
        <td>Giá</td> 
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td></td>
    </tr>


    ';

    foreach ($_SESSION['mycart'] as $cart){
        $hinhsp = $img_path.$cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp= '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"></a>';
        echo '

        <tr>
        <td><img src="'.$hinhsp.'" height="80px" alt=""></td>
        <td>'.$cart[1].'</td>
        <td>'.$cart[3].',000</td><br>
        <td>'.$cart[4].'</td><br> 
        <td>'.$ttien.',000</td><br>

    </tr>

    ';
    $i+=1;

}
echo'<span>Tổng tiền:'.$tong.',000</span>';    
}
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart){
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
}
return $tong;
}

function insert_bill($name, $tel,$addr,$pttt,$ngaydathang,$tongdonhang)
{
    $sql = "INSERT INTO bill(bill_name,bill_tel,bill_addr,bill_pttt,ngaydathang,total) 
    VALUES ('$name', '$tel','$addr','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastInsertID($sql);
}
function insert_cart( $idpro,$img,$name,$price,$soluong,$thanhtien,$idbill)
{
    $sql = "INSERT INTO cart(,idpro,img,name,price,soluong,thanhtien,idbill) 
    VALUES ( '$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadOne_bill($id)
{
    $sql = "select * from bill where id=" .$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" .$idbill;
    $bill = pdo_query($sql);
    return $bill;
}