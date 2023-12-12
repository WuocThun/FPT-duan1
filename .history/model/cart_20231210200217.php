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
          <!--  <td><button>Xóa</button></td> -->
    </tr>

    ';
    $i+=1;

}

echo'
<span>Tổng tiền:'.$tong.',000</span> 
<a href="index.php?act=thanhtoan"><button>Thanh toán</button></a>
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
function insert_cart($iduser, $idpro,$img,$name,$price,$soluong,$thanhtien,$idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) 
    VALUES ('$iduser', '$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadOne_bill($id)
{
    $sql = "select * from danhmuc where id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}