<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style1.css">
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
            margin-left: 15%;
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
            margin-left: 10%;
            background-color: brown;
            color: white;
            margin-top: 5%;
            padding: 1%;
            width: 20%;
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

<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="sanpham.php">Sản phẩm</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>

                <li><a href="dangnhap.php">Đăng nhập</a></li>
                <li><a href="dangky.php">Đăng ký</a></li>
            </ul>
        </div>

        <div class="spct">
            <div class="tsp"> 
                <img src="/Duanmau-FPT/img/combo.png" alt=""> <br>
            </div>
            <div id="tsp" class="tsp">
            <h1>SALAD THỊT DĂM BÔNG SỐNG</h1>
            <span>Giá: 100.000Đ</span> <br>
            <p>
            <strong>Mô tả:</strong><br>
                Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức.
                Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản,
                trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh
                tế, dùng trong những dịp đặc biệt.
            </p>
            <button>Mua ngay</button> <button>Thêm vào giỏ hàng</button>
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
                    <td>dddđ</td>
                    <td>d</td>
                    <td>s</td>
                </tr>
                <tr>
                    <td>ssss</td>
                    <td>d</td>
                    <td>s</td>
                </tr>

            </table>


            <textarea name="" id="" cols="100" rows="15" placeholder="Viết bình luận của bạn"></textarea><br><br>
            <button>Gửi bình luận</button>
            </div>
        <footer class="duoi">
            <div class="cuoi">
                <h2>SUSHI KOKORO </h2><br><br>

                Hotline: + 84972220532 - + 84972220456 <br> <br>

                Email: cuahangsushikokoro@gmai.com <br><br>

                Website: http://cuahangsushikokoro@gmai.com



            </div>
            <div id="cuoi" class="cuoi">
                <h2>Địa chỉ cửa hàng</h2> <br> <br>

                Cơ sở 1 (chính): 10 Phan Bội Châu, Q.Hải Châu, Tp.Đà Nẵng <br>
                <br> <br>
                Cơ sở 2: 230 Nguyễn Thị Thập, Q.Liên Chiểu, Tp.Đà Nẵng <br>

                <br> <br>
                Cơ sở 3: 116 Phùng Hưng, Q.Liên Chiểu, Tp.Đà Nẵng <br>

            </div>

        </footer>
    </div>
</body>

</html>