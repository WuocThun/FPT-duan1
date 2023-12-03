<?php
function doadAll_bl()
{
    $sql = "select * from danhmuc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_Bl($comment, $iduser, $idpro, $daycomment){
    $sql = "insert into taikhoan(comment,iduser,idpro,daycomment) values ('$comment', '$iduser', '$idpro', '$daycomment') ";

}
?>