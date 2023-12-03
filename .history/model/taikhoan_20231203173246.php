<?php
function insert_taikhoan($user,$pass,$email,$addr,$tel) {
    $sql = "insert into taikhoan(user,pass,email,addr,tel) values ('$user','$pass','$email','$addr','$tel')";
    pdo_execute($sql);
}
function check_user($userdn, $passdn) {
    $sql = "select * from taikhoan where user='".$userdn."' and pass = '".$passdn."'";
    $sp = pdo_query_one($sql);
    return $sp; 
}
function  update_taikhoan($id, $user,$pass, $newpricesp, $pricesp, $imgsp, $des)
{
   if ($imgsp != "")
      $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $namesp . "',newpricesp='" . $newpricesp . "', pricesp='" . $pricesp . "',imgsp='" . $imgsp . "',des='" . $des . "' where id=" . $id;
   else
      $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $namesp . "',newpricesp='" . $newpricesp . "',pricesp='" . $pricesp . "',des='" . $des . "' where id=" . $id;
   // print_r($sql);
   pdo_execute($sql);
}