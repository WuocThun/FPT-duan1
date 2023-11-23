<?php
include("header.php");
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
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
                    $imgdm1 = $_FILES['imgdm']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["imgdm"]["name"]);
                    if (move_uploaded_file($_FILES["imgdm"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_danhmuc($namedm, $imgdm1);
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
                $imgdm1 = $_FILES['imgdm']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["imgdm"]["name"]);
                if (move_uploaded_file($_FILES["imgdm"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $namedm = $_POST['namedm'];
                $id = $_POST['id'];
                update_danhmuc($id, $namedm, $imgdm1);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
            //END DANH MỤC
            //SẢN PHẨM
        case 'addsp':
            // kiểm tra xem người dùng có add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (isset($_POST['namesp']) && $_POST['namesp'] != "") {
                    $iddm = $_POST['iddm'];
                    $namesp = $_POST['namesp'];
                    $pricesp = $_POST['pricesp'];
                    $newpricesp= $_POST['newpricesp'];
                    $des = $_POST['des'];
                    $imgsp1 = $_FILES['imgsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                    if (move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($namesp, $pricesp,$imgsp,$des,$iddm,$newpricesp);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao = "Vui lòng nhập đủ thông tin.";
                }
            }
            $listdanhmuc = loadAll_danhmuc();
            include 'sanpham/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $namesp = $_POST['namesp'];
                $pricesp = $_POST['pricesp'];
                $newpricesp = $_POST['newpricesp'];
                $des = $_POST['des'];
                $imgsp1 = $_FILES['imgsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                if (move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                update_sanpham($id, $iddm, $newpricesp,$namesp, $pricesp, $imgsp1, $des);
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
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