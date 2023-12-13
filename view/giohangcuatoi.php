
<style>
        .giohang {
            color: white;
            margin-top: 3%;
            text-align: center;
        }

        .giohang h1 {
            margin-bottom: 3%;
            text-align: center;
            color: rgb(255, 254, 254);
  text-shadow: 2px 2px 2px #c92727;  
font-size: 40px;     }


        .tonggh
         tr {
            width: 10%;
            border: 1px solid black;
        }

        .tonggh
         table {
            table-layout: fixed;
            margin-left: 10%;
            margin-right: 10%;

        }
        .tonggh table,tr,th,td{
    border-collapse: collapse;

}
.tonggh table tr th{
    background-color: white;
    color: brown;
    padding: 25px;
}
   

        .tonggh
         table tr td img {
            width: 70%;
            height: 30%;

        }
        .tonggh td{
            width: 10%;
        }

        .tonggh
         table tr td:nth-child(2) {
            padding: 3%;

            /* Đặt kích thước cho td thứ hai */
        }

        .tonggh
         table tr td:nth-child(3) {
            width: 5%;
            /* Đặt kích thước cho td thứ ba (nhỏ hơn td thứ hai) */
        }

        

        .tonggh
         table tr td button{
            width: 60%;
            font-size: 15px;
            padding: 5%;
        }

        .tonggh
         table tr td button:hover {
            background-color: brown;
            color: aliceblue;
        }
        .tonggh table tr:hover{
            color: black;
            background-color: white;

        }

        .tonggh
         button{
            width: 10%;
            padding: 1%;
            background-color: brown;
            color: white;
        }

        .tonggh
         button:hover {
            opacity: 0.7; /* Giảm độ mờ khi hover */

        }
        .tonggh
         span, button{
            margin: 5%;
        }
    </style>
</head>


        <div class="giohang">
            <h1>ĐƠN HÀNG CỦA TÔI</h1>
            <div class="tonggh">
                <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng mặt hàng</th>
                    <th>Tổng giá trị</th>
                    <th>Tình trạng đơn hàng</th>
                </tr>
                   <?php
                   if(is_array($listbill)){
                       foreach ($listbill as $bill){
                           $count = loadall_cart_cout($bill['id']);
                           $ttdh = get_ttdh($bill['bill_status']);
                           extract($bill);
                        echo '
                        <tr>
                        <td>KOKORO-'.$bill['id'].'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'.$count.'</td>
                        <td>'.$bill['total'].'</td>
                        <td>'.$ttdh.'</td>
                        </tr>
                        ';
                    }
                        }
                   ?>
                </table>
            </div>


        </div>

       