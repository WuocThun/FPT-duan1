<?php
include("header.php");
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/binhluan.php");
include ("../model/taikhoan.php");
include ("../model/cart.php");
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
                    insert_sanpham($namesp, $pricesp,$imgsp1,$des,$iddm,$newpricesp);
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
                $newpricesp = $_POST['newpricesp'];
                $pricesp = $_POST['pricesp'];
                $des = $_POST['des'];
                $imgsp1 = $_FILES['imgsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                if (move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm,$namesp, $newpricesp, $pricesp, $imgsp1, $des);
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
            //END SẢN PHẨM
            //KHÁCH HÀNG
            case "dskh":
                $listtaikhoan= loadall_TK();
                include 'taikhoan/list.php';
                break;
            case "xoakh":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_TK();
                include 'taikhoan/list.php';
                break;
                case "suakh":
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $tk = loalone_TK($_GET['id']);
                    }
                include 'taikhoan/update.php';
                break;
            case "updatekh":
                if (isset($_POST['id']) && ($_POST['id'] > 0)){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $addr = $_POST['addr'];
                    $role = $_POST['role'];
                    $nameuser = $_POST['nameuser'];
                    update_TK($id,$user,$pass,$email,$tel,$addr,$role,$nameuser);

                }
                $listtaikhoan= loadall_TK();
                include "taikhoan/list.php";
                break;
            //END KHÁCH HÀNG
            // BÌNH LUẬN
            case "dsbl":
                $listbinhluan= doadAll_bl(0);
                include 'binhluan/list.php';
                break;
        
            case "xoabl":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan= doadAll_bl(0);
                include 'binhluan/list.php';
                break;
                case 'suabl':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $binhluan = loadOne_binhluan($_GET['id']);
                    }
                    $listbinhluan= doadAll_bl(0);
                    include 'binhluan/update.php';
                    break;
                 case 'updatebl':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $comment = $_POST['comment'];
                        $id = $_POST['id'];
                        $idpro = $_POST['idpro'];
                        $iduser = $_POST['iduser'];
                        $daycomment = $_POST['daycomment'];
                        update_binhluan($id,$comment,$idpro,$iduser);
                    }
                    $listbinhluan =doadAll_bl(0);
                    include 'binhluan/list.php';
                    break;
            // end BÌNH LUẬN
            //Thống kê bill
            case 'listbill':
                if(isset($_POST['kyw'])&& ($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
                }else{
                $kyw = "";
                }
                $listbill = loadall_bill($kyw,0);
                include "bill/list.php";
                break;
                case "xoabill":
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_bill($_GET['id']);
                    }
                    $listbill = loadall_bill($kyw="",0);
                    include 'bill/list.php';
                    break;
                    case "suabill":
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            $billone = loadOne_bill($_GET['id']);
                        }
                        $listbill = loadall_bill($kyw="",0);
                        include "bill/update.php";
                        break;
                        case "updatebill":
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $bill_status = $_POST['bill_status'];
                        update_bill($id,$bill_status);
                }
                            $listbill = loadall_bill($kyw="",0);
                            include "bill/list.php";
                            break;
            //end bill
                //thống kê
                case "thongkebill";
                $total_price = total_price();
                $tongdon = tongdon ();
                $listthongke = loadall_thongkebill();
                include "thongke/listthongke.php";
                break;
                case "char";
                $listthongke = loadall_thongkebill();
                // include 'thongke/linechart.php';
                include 'thongke/piechart.php';
                break;
                //end thống kê
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
//END MVC