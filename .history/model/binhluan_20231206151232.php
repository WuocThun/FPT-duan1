<?php
function insert_binhluan($comment, $iduser,$idpro,$daycomment)
{
    $sql = "INSERT INTO binhluan (comment,iduser,idpro,daycomment) VALUES ('$comment',' $iduser','$idpro','$daycomment')";
    pdo_execute($sql);
}


function doadAll_bl($idpro)
{
    $sql = "select * from binhluan where 1";
    if($idpro>1)
    //  idpro ='".$idpro."' order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_Bl($comment, $iduser, $idpro, $daycomment){
    $sql = "insert into binhluan(comment,iduser,idpro,daycomment) values ('$comment', '$iduser', '$idpro', '$daycomment') ";   
    pdo_execute ($sql);
}
    

