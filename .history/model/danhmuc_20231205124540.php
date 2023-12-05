<?php
function insert_danhmuc($namedm, $imgdm)
{
    $sql = "INSERT INTO danhmuc(namedm,imgdm) VALUES ('$namedm','$imgdm')";
    pdo_execute($sql);
}
function doad_namedm($iddm) {
    $sql = "select * from danhmuc where id =".$iddm;
    $tendm = pdo_execute($sql);
    extract($tendm);
    return $namedm;
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadAll_danhmuc_home()
{
    $sql = "select * from danhmuc where 1 order by id DESC limit 0,1";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadAll_danhmuc()
{
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function load_ten_dm($iddm)
 {
    $sql = "select * from danhmuc where id=" .$iddm;
    $dm =pdo_query($sql);
    extract($dm);
    return $namedm;
}
function loadOne_danhmuc($id)
{
    $sql = "select * from danhmuc where id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $namedm, $imgdm)
{
    $sql = "update danhmuc set namedm='" . $namedm . "',imgdm='" . $imgdm . "' where id=" . $id;
    pdo_execute($sql);
}