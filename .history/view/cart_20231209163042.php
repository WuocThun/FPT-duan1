<?php
function view_cart(){
    $tong = 0;
    $i= 0;
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
}
?>