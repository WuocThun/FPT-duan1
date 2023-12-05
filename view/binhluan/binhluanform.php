<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro =$_REQUEST['idpro'];
$dsbl = loadAll_danhmucbinhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>
<body>
    


<table class="bl">
<?php        
echo "<tr>
            <th>BÌNH LUẬN</th>
            <th>USER</th>
            <th>NGÀY</th>
        </tr>
        <tr>
            <td>$comment</td>
            <td>$idpro</td>
            <td>$daycomment</td>
        </tr>"
        ?>
    </table>


    <form action="<?$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <input type="text" name="comment">
        <input type="submit" value="Gửi" name="guibinhluan">
    </form>
   <?php
   if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
    $comment=$_POST['comment'];
    $iduser=$_SESSION['user']['id'];
    $idpro=$_POST['idpro'];
    $daycomment=date('h:i:sa  d/m/Y');
    insert_binhluan($comment, $iduser,$idpro,$daycomment);
     header("location: " .$_SERVER['HTTP_REFERER']);
   };


   
   ?>


    </body>
</html>