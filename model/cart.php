
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
        $xoasp= '<a href="index.php?act=delcart&idcart='.$i.'">
        <input type="button" value="Xoá"></a>';
       
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
function view_cart_test(){
    global  $img_path;
    $tong = 0;
    $i= 0;

        echo '      

        <tr>
        <td>CART 0 - ID Sp</td>
        <td>CART 1- ten sanpham</td>
        <td>CART 2 - anh</td>
        <td>CART 3- gia</td>
        <td>CART 4- so luon</td>
        <td>CART 5- gia</td>

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
        <td>'.$cart[0].'<br>
        <td>'.$cart[1].'<br>
        <td>'.$cart[2].'<br>
        <td>'.$cart[3].'<br>    
        <td>'.$cart[4].'<br>
        <td>'.$cart[5].'<br>
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
<span>Tổng tiền: '.$tong.',000</span> 
';
}
function view_cart1() {
    global  $img_path;
    $tong = 0;
    $i= 0;
    $xoaspall= '<a href="index.php?act=delcart"><input type="button" value="Xoá hết "></a>';

        echo '      
        <tr>
        <th>Ảnh món ăn</th>
        <th>Tên món ăn </th>
        <th>Giá</th> 
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>        '.$xoaspall.' 
        </th>
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
        <td>'.$cart[3].',000</td>
        <td>'.$cart[4].'</td>
        <td>'.$ttien.',000</td>
        <td>'.$xoasp.'
        </td>
    </tr>
    ';
    $i+=1;
}
echo'
<span>Tổng tiền:'.$tong.',000</span> 
<a name="thanhtoan" href="index.php?act=thanhtoan"><button>Thanh toán</button></a>
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
        <td>'.$cart[3].',000</td>
        <td>'.$cart[4].'</td> 
        <td>'.$ttien.',000</td>

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

function insert_bill($iduser,$name, $tel,$addr,$pttt,$ngaydathang,$tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_tel,bill_addr,bill_pttt,ngaydathang,total) 
    VALUES ('$iduser','$name', '$tel','$addr','$pttt','$ngaydathang','$tongdonhang')";
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
function loadall_cart_cout($idbill)
{
    $sql = "select * from cart where idbill=" .$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw="",$iduser=0)
{
    //nối chuỗi
    $sql = "select * from bill where 1";
    if($iduser>0)  $sql.= " AND iduser=" .$iduser;
    if($kyw!="")  $sql.= " AND id like '%".$kyw."%'";
    $sql.= " order by id desc";
    $billist = pdo_query($sql);
    return $billist;
}
function get_ttdh($n) {
    $tt= "";
    switch($n){
        case "0":
            $tt = "Đơn hàng mới";
            break;
        case "1":
            $tt = "Đang xử lí";
            break;
        case "2":
            $tt = "Đang giao hàng";
            break;
        case "3":
            $tt = "Đã giao hàng";
            break;
        }
        return $tt;
}
function delete_bill($id) {
    $sql = "delete from bill where id=" . $_GET['id'];
    pdo_execute($sql);
}

function update_bill($id, $bill_status)
{
    $sql = "update bill set  bill_status='".$bill_status."' where id=" . $id;
    pdo_execute($sql);
}
function loadall_thongkebill(){
    $sql = "select danhmuc.id as madm,
         danhmuc.namedm as tendm,
         count(sanpham.id) as countsp,
         min(sanpham.newpricesp) as minpricesp,
         max(sanpham.newpricesp) as maxpricesp,
         avg (sanpham.newpricesp) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function total_price() {
    // $pdo = new PDO("mysql:host=127.0.0.1:3309;dbname=duan1", "root", "");
    $pdo = new PDO("mysql:host=localhost;dbname=duan1", "root", "");

    // Chuẩn bị truy vấn SQL
    $sql = 'SELECT SUM(total) AS total_sumBill FROM bill';
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    // $pdo = null;

    // return $sql;
    return $result['total_sumBill'];
}
function tongdon () {
    // Kết nối đến cơ sở dữ liệu
    // $pdo = new PDO("mysql:host=127.0.0.1:3309;dbname=duan1", "root", "");
    $pdo = new PDO("mysql:host=localhost;dbname=duan1", "root", "");

    // Chuẩn bị truy vấn SQL

    $sql = "SELECT COUNT(*) AS total_amount FROM bill";
    $stmt = $pdo->prepare($sql);

    // Thực hiện truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối đến cơ sở dữ liệu
    $pdo = null;

    return $result['total_amount'];

}