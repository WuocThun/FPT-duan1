<?php


$idpro = $_REQUEST['idpro'];
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

    .tableBl button {
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

    .tableBl textarea {
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
    </style>

    <table class="bl">
        <tr>
            <th>BÌNH LUẬN</th>
            <th>USER</th>
            <th>NGÀY</th>
        </tr>
        <?php
                echo '
                <tr>
                <td>Món này rất ngon, sau này sẽ ủng hộ lại.</td>
                <td>'.$idpro.'</td>
                <td>08/ 12/ 2023</td>
            </tr>
                
                '
                // foreach ($listbl as $bl){
                //     extract ($bl);
                //     echo '<tr>
                //     <td>'.$comment.'</td>
                //     <td>'.$iduser.'</td>
                //     <td>'.$daycomment.'</td>
                // </tr>';
                // }
                ?>
        <!-- <tr>
            <td>Món này rất ngon, sau này sẽ ủng hộ lại.</td>
            <td></td>
            <td>08/ 12/ 2023</td>
        </tr>
        <tr>
            <td>Sản phẩm tươi ngon! Đáng mua.</td>
            <td>Quốc</td>
            <td>03/ 11/ 2023</td>
        </tr>
        <tr>
            <td>Đồ ăn ngon miệng, sạch sẽ, ăn hoài không ngán.</td>
            <td>Như Ly</td>
            <td>20/ 10/ 2023</td>
        </tr> -->

    </table>

    <form action="binhluan.php" method="post">
        <textarea name="comment" id="" cols="100%" rows="5" placeholder="Viết bình luận của bạn"></textarea><br><br>
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
        </div>
    </form>
<?php
if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
    $comment = $_POST['comment'];
    $comment = $_POST['comment'];
    $comment = $_POST['comment'];
    $comment = $_POST['comment'];
    insert_Bl($comment, $iduser, $idpro, $daycomment);
}
?>
</body>

</html>