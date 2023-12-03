<?php
function loadAll_danhmuc()
{
    $sql = "select * from danhmuc";
    $listbl = pdo_query($sql);
    return $listbl;
}
?>