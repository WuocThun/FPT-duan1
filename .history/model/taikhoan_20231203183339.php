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
function  update_taikhoan($id, $user,$pass, $email, $tel, $addr)
{
      $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "', email='" . $email . "',tel='" . $tel . "',addr='" . $addr . "' where id=" . $id;  
   pdo_execute($sql);
} 
function check_user($userdn, $passdn) {
    $sql = "select * from taikhoan where user='".$userdn."' and pass = '".$passdn."'";
    $sp = pdo_query_one($sql);
    return $sp; 
}