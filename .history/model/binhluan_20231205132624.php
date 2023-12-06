<?php
function doadAll_bl($idpro)
{
    $sql = "select * from binhluan where idpro ='".$idpro."' order by id ";
    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_Bl($comment, $iduser, $idpro, $daycomment){
    $sql = "insert into binhluan(comment,iduser,idpro,daycomment) values ('$comment', '$iduser', '$idpro', '$daycomment') ";   
    pdo_execute ($sql);
}