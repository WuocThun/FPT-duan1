<?php
include("header.php");
include("../model/pdo.php");
include("../model/danhmuc.php");
//MVC
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //DANH MỤC
        case 'adddm':
            // kiểm tra xem người dùng có add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (isset($_POST['namedm']) && $_POST['namedm'] != "") {
                    $namedm = $_POST['namedm'];
                    $imgdm = $_POST['imgdm'];
                    insert_danhmuc($namedm, $imgdm);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao = "Vui lòng nhập đủ thông tin.";
                }
            }
            include 'danhmuc/add.php';
            break;
        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $namedm = $_POST['namedm'];
                $imgdm = $_POST['imgdm'];
                $id = $_POST['id'];
                update_danhmuc($id, $namedm, $imgdm);
                $thongbao = "Thêm thành công"
            }else {
                $thongbao = "Có lỗi";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        //END DANH MỤC
        //SẢN PHẨM


        //END SẢN PHẨM
        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}
include "footer.php";
//END MVC