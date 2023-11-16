<?php
function insert_sanpham($namesp, $pricesp,$imgsp,$des,$iddm)
{
    $sql = "INSERT INTO sanpham(namesp,pricesp,imgsp,des,iddm) VALUES ('$namesp','$pricesp','$imgsp','$des','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadAll_sanpham($kyw = "",$iddm = 0) {
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm like '%" . $iddm . "%'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadOne_sanpham ($id) {
    $sql = "select * from sanpham where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm; 
}
function  update_sanpham($id, $iddm, $namesp, $pricesp, $imgsp, $des)
{
   if ($imgsp != "")
      $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $namesp . "',pricesp='" . $pricesp . "',imgsp='" . $imgsp . "',des='" . $des . "' where id=" . $id;
   else
      $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $namesp . "',pricesp='" . $pricesp . "',des='" . $des . "' where id=" . $id;
   // print_r($sql);
   pdo_execute($sql);
}
// function loadAll_danhmuc()
// {
//     $sql = "select * from danhmuc order by id desc";
//     $listdanhmuc = pdo_query($sql);
//     return $listdanhmuc;
// }


// function update_danhmuc($id, $namedm, $imgdm)
// {
//     $sql = "update danhmuc set namedm='" . $namedm . "',imgdm='" . $imgdm . "' where id=" . $id;
//     pdo_execute($sql);
// }

