<?php
function loadAll_danhmuc()
{
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
?>