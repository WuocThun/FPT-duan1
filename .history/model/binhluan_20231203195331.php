<?php
function doadAll_bl()
{
    $sql = "select * from danhmuc";
    $listbl = pdo_query($sql);
    return $listbl;
}
?>