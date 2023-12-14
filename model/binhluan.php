<?php
function insert_binhluan($comment, $iduser,$idpro,$daycomment)
{
    $sql = "INSERT INTO binhluan (comment,iduser,idpro,daycomment) VALUES ('$comment',' $iduser','$idpro','$daycomment')";
    pdo_execute($sql);
}


function doadAll_bl($idpro)
{
    $sql = "select * from binhluan where 1";
    if($idpro>0)
        $sql .= " and idpro ='".$idpro."'";
        $sql .= " order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_Bl($comment, $iduser, $idpro, $daycomment){
    $sql = "insert into binhluan(comment,iduser,idpro,daycomment) values ('$comment', '$iduser', '$idpro', '$daycomment') ";   
    pdo_execute ($sql);
}
    
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadOne_binhluan ($id) {
    $sql = "select * from binhluan where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp; 
}

function update_binhluan($id, $comment,$idpro,$iduser)
{
    $sql = "update binhluan set comment='" . $comment . "', idpro='".$idpro."', iduser='".$iduser."' where id=" . $id;
    pdo_execute($sql);
}