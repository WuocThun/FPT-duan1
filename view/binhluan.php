
<?php
session_start();
ob_start();

// extract($_SESSION['userdn']);
    if(isset($_SESSION['userdn'])){
$iduser = $_SESSION['userdn']['id'];
$_SESSION['userdn'];
include '../model/pdo.php';
include '../model/binhluan.php';

$idpro = $_REQUEST['idpro'];
$dsbl = doadAll_bl($idpro);
$thongbao = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/style/style1.css">
</head>

<body>

<style>
    .spct {
        color: white;
        display: flex;
    }

    .tsp {
        width: 50%;
        flex-direction: column;
    }

    #tsp {
        width: 50%;

    }

    .tsp img {
        width: 70%;
        margin-left: 20%;
    }

    .tsp h1 {
        padding-bottom: 5%;
        font-size: 40px;
        color: rgb(255, 254, 254);
        text-shadow: 2px 2px 2px #c92727;
    }

    .tsp strong {
        color: rgb(245, 113, 113);
    }

    .tsp p {
        line-height: 1.6em;
        width: 90%;
        height: 35%;
        max-height: 35%;
    }

    .tsp button,
    .tsp a button {
        margin-top: 10%;
        border: none;
        background-color: brown;
        color: white;
        box-shadow: 0px 0px 5px brown;
        opacity: 1;
        /* Giảm độ mờ khi hover */
        width: 200px;
        margin-left: 5%;
        padding: 15px;
        font-size: 15px;
    }

    .tsp a button {
        margin-top: 37%;
    }




    .tsp button:hover,
    .tableBl button:hover {
        opacity: 0.7;
        /* Giảm độ mờ khi hover */


    }
    table{
        width: 60%;
    }
    .tableBl input[type="submit"] {
        border: none;
        background-color: brown;
        color: white;
        padding: 1%;
        width: 15%;
        box-shadow: 0px 0px 5px brown;
        opacity: 1;
        /* Giảm độ mờ khi hover */
        transition: opacity 0.3s ease;

    }

    .tableBl {
        margin-top: 10%;
        margin-left: 10%
    }

    .tableBl table {
        width: 90%;

    }

    .bl {
        flex-direction: row;
        border-collapse: collapse;
        color: white;
        text-align: center;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .bl th,
    td {
        width: 10%;
        padding: 2%;
        text-align: center;

    }

    .bl th {
        font-size: 20px;
        background-color: brown;
        box-shadow: 0px 0px 5px brown;

    }

    .tableBl input[type="text"] {
        padding: 2%;
        width: 90%;
        background-color: black;
        box-shadow: 2px 2px 5px #888888;
        color: white;
       

    }

    .row-flex {
        display: flex;
        flex-direction: row;
    }

    .tableBl textarea:hover {
        background-color: white;
        color: black;
    }

    .rating {
        display: inline-block;
    }

    .rating input {
        display: none;
    }

    .rating label {
        float: right;
        cursor: pointer;
        color: #ccc;
        transition: color 0.3s;
    }

    .rating label:before {
        content: '\2605';
        font-size: 20px;
    }
.rating input:checked~label,
    .rating label:hover,
    .rating label:hover~label {
        color: brown;
        transition: color 0.3s;
    }
    input[type="submit"]:hover{
                opacity: 0.8;

            }
    </style>

    <table class="bl">
        <tr>
            <th>BÌNH LUẬN</th>
            <th>USER</th>
            <th>NGÀY</th>
        </tr>
        <?php
        // echo $iduser; 
        // echo $idpro; 
        foreach ($dsbl as $bl) {
            extract($bl);
                echo '
                <tr> 
                <td>'.$comment.'</td>
                 <td>'.$iduser.'</td> 
                <td>'.$daycomment.'</td>
            </tr>
            '
            // echo "
        // <tr>
        //     <td>$comment</td>
        //     <td>$iduser</td>
        //     <td>$daycomment</td>
        // </tr>"
            ;
        }
                ?>
    </table>
    <div>
    <?php
    }
if(isset($_SESSION['userdn'])){
    extract($_SESSION['userdn']);
    ?>
    <div>
    <form style="text-align:center;" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <input type="text" height="5000px" name="comment" id="" cols="100%" rows="5" placeholder="Viết bình luận của bạn"></input><br><br>
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
        <?=$thongbao?>
        </div>
    </form>


    <?php
}else{
?>
 <form style="text-align:center;" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <?php
        include '../model/pdo.php';
        include '../model/binhluan.php';
        $idpro = $_REQUEST['idpro'];
        $dsbl = doadAll_bl($idpro);
        echo '
        <table>
        <tr>
        <th>BÌNH LUẬN</th>
        <th>USER</th>
        <th>NGÀY</th>
     </tr>
        ';
         foreach ($dsbl as $bl) {
            extract($bl);
                echo '
                
                <tr> 
                <td>'.$comment.'</td>
                <td>Ẩn danh</td>
                <td>'.$daycomment.'</td>
            </tr>
            </table>
            ';}
        ?>
        <!-- <input type="text" height="5000px" name="comment" id="" cols="100%" rows="5" placeholder="Viết bình luận của bạn"></input><br><br> -->
        <!-- <input type="submit" value="Gửi bình luận" name="guibinhluan"> -->
        <h1>Bạn cần đăng nhập để bình luận</h1>
        </div>
    </form>

<?php
}
?>
    <?php
if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan']) ){
    $idpro = $_REQUEST['idpro'];
    $comment = $_POST['comment'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['userdn']['id'];
    $daycomment = date("d/m/Y");
    insert_Bl($comment, $iduser, $idpro, $daycomment);
    // header("location: index.php?act=sanphamct&idsp=".$idpro);
     header("location: ".$_SERVER['HTTP_REFERER']); 
     ob_end_flush();
}
?>
</body>
</html>