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
function checkemail($email) {
    $sql = "select * from taikhoan where email = '".$email."'";
    $sp = pdo_query_one($sql);
    return $sp; 
}
function loadall_TK()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loalone_TK()
{
    $sql = "select * from taikhoan where id" .$id;
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $_GET['id'];
    pdo_execute($sql);
}