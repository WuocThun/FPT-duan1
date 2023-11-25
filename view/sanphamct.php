
    <style>
        .spct {
            color: white;
            display: flex;
        }
        .tsp{
            flex-direction: column;
        }
        #tsp{
            padding-right: 1%;
            margin-left: 12%;
            margin-top: 5%;
        }

        .tsp img {
            width: 550px;
            margin-left: 20%;
        }
        .tsp h1{
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
        }

        .tsp button{
            border: none;
            margin-left: 10%;
            background-color: brown;
            color: white;
            margin-top: 5%;
            padding: 2%;
            width: 30%;
            box-shadow: 0px 0px 5px brown;
            opacity: 1; /* Giảm độ mờ khi hover */
            transition: opacity 0.3s ease; /* Thêm transition để tạo hiệu ứng mờ mượt */
        }

        .tsp button:hover,.tableBl button:hover {
            opacity: 0.7; /* Giảm độ mờ khi hover */

        }

        .tableBl button{
            border: none;
            background-color: brown;
            color: white;
            padding: 1%;
            width: 15%;
            box-shadow: 0px 0px 5px brown;
            opacity: 1; /* Giảm độ mờ khi hover */
            transition: opacity 0.3s ease;
        }

        .tableBl{
            margin-top: 10%;
            margin-left: 10%
        }

        .tableBl table{
            width: 90%;

        }

        .bl{
            flex-direction: row;
            border-collapse: collapse;            
            color: white;
            text-align: center;
            margin-top: 5%;
            margin-bottom: 5%;
        }
        .bl th,td{
            width: 10%;
            padding: 2%;
            text-align: center;
            
        }
        .bl th{
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

        .tableBl textarea:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>
<?php
extract($onesp);
$img = $img_path . $imgsp;

?>
        <div class="spct">
            <div class="tsp"> 
                <!-- <img src="/Duanmau-FPT/img/combo.png" alt=""> <br> -->
            <?php 
            echo '<img src="'.$img.'">';
            ?> <br>
            </div>
            <div id="tsp" class="tsp">
            <h1><?=$namesp ?></h1>
            <span>Giá: <?=$newpricesp?>,000Đ</span> <br>
            <p>
            <strong>Mô tả:</strong><br>
                <!-- Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức.
                Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản,
                trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh
                tế, dùng trong những dịp đặc biệt. -->
                <?=$des?>
            </p>
           <a href="index.php?act=thanhtoan"><button>Mua ngay</button></a>  <button>Thêm vào giỏ hàng</button>
            </div>
        </div>

        <div class="tableBl">

        <table class="bl">
                <tr>
                    <th>BÌNH LUẬN</th>
                    <th>USER</th>
                    <th>NGÀY</th>
                </tr>
                <tr>
                    <td>Món này rất ngon, sau này sẽ ủng hộ lại.</td>
                    <td>Nguyễn Xinh</td>
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
                </tr>

            </table>


            <textarea name="" id="" cols="100" rows="5" placeholder="Viết bình luận của bạn"></textarea><br><br>
            <button>Gửi bình luận</button>
            </div>
