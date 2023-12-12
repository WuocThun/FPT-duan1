<style>
.giohang {
    color: white;
    margin-top: 3%;
    text-align: center;
}

.giohang h1 {
    margin-bottom: 3%;
    text-align: center;
    color: rgb(255, 254, 254);
    text-shadow: 2px 2px 2px #c92727;
    font-size: 40px;
}


.tonggh tr {
    width: 10%;
    border: 1px solid #ddd;
}

.tonggh table {
    margin-left: 10%;
    margin-right: 10%;

}

.tonggh table tr td img {
    width: 70%;
    height: 30%;

}

.tonggh td {
    width: 10%;
}

.tonggh table tr td:nth-child(2) {
    width: 30%;
    text-align: left;
    padding: 3%;

    /* Đặt kích thước cho td thứ hai */
}

.tonggh table tr td:nth-child(3) {
    width: 5%;
    /* Đặt kích thước cho td thứ ba (nhỏ hơn td thứ hai) */
}



.tonggh table tr td button {
    width: 60%;
    font-size: 15px;
    padding: 5%;
}

.tonggh table tr td button:hover {
    background-color: brown;
    color: aliceblue;
}

.tonggh table tr:hover {
    color: black;
    background-color: antiquewhite;
    opacity: 0.7;
    /* Giảm độ mờ khi hover */


}

.tonggh button {
    width: 10%;
    padding: 1%;
    background-color: brown;
    color: white;
}

.tonggh button:hover {
    opacity: 0.7;
    /* Giảm độ mờ khi hover */

}

.tonggh span,
button {
    margin: 5%;
}

* {
    text-decoration: none;
}

backgr-w {
    background-color: white;
}
</style>
</head>
<?php
extract($_SESSION['userdn']);
?>
<h1 style="color: white;">
    Xin chào, <?=$user?>
</h1>
<div class="backgr-w">
    <a href="index.php?act=edit_taikhoan">Chỉnh sửa tài khoản</a> <br>
    <?php 
if ($role ==1) { ?>
    <a href="admin/index.php">Đăng nhập Admin</a> <br>
    <?php }?>
    <a href="index.php?act=quenmk">Quên Mật khẩu</a> <br>
    <a href="index.php?act=thoat">Thoát</a> <br>
</div>
<div class="giohang">
    <h1>GIỎ HÀNG</h1>
    <div class="tonggh">
        <table>
            <!-- <tr>
                        <td><img src="/FPT-duan1/img/mid.png" alt=""></td>
                        <td> Salad thịt giăm bông sống<br>
                        </td>
                        <td><button>Xóa</button></td>
                    </tr> -->
            <tr>
                <td>Ảnh món ăn</td>
                <td>Tên món ăn<br>
                <td>Giá<br>
                <td>Số lượng<br>
                <td>Thành tiền<br>
                </td>
                <td></td>
            </tr>
            <?php
                    $tong = 0;
                    $i= 0;
                    foreach ($_SESSION['mycart'] as $cart){
                        $hinhsp = $img_path.$cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                        $xoasp= '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"> </a>';
                        echo '
                        <tr>
                        <td><img src="'.$hinhsp.'" height alt=""></td>
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
                    ?>
        </table>
        <?php
                echo '
                <span>Tổng tiền:'.$tong.',000</span>  <a href="index.php?act=thanhtoan"><button>Thanh toán</button></a>
                ';
                ?>
    </div>


</div>