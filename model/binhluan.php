<?php
function insert_binhluan($comment, $iduser,$idpro,$daycomment)
{
    $sql = "INSERT INTO binhluan (comment,iduser,idpro,daycomment) VALUES ('$comment',' $iduser','$idpro','$daycomment')";
    pdo_execute($sql);
}


function loadAll_danhmucbinhluan($idpro)
{
    $sql = "select * from binhluan where idpro ='".$idpro."' order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
?>
