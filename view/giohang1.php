
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
    font-size: 40px;
}


.tonggh tr {
    width: 10%;
}
.tonggh table,tr,th,td{
    border-collapse: collapse;

}

.tonggh table {
    margin-left: 10%;
    margin-right: 10%;

}

.tonggh table tr td img {
    width: 70%;
    height: 30%;

}

.tonggh td {
    width: 10%;
}

.tonggh table tr td:nth-child(2),.tonggh table tr th:nth-child(2) {
    width: 30%;
    text-align: left;
    padding: 3%;

    /* Đặt kích thước cho td thứ hai */
}

.tonggh table tr td:nth-child(3),.tonggh table tr th:nth-child(3) {
    width: 5%;
    /* Đặt kích thước cho td thứ ba (nhỏ hơn td thứ hai) */
}



.tonggh table tr td button {
    width: 60%;
    font-size: 15px;
    padding: 5%;
}

.tonggh table tr td button:hover {
    background-color: brown;
    color: aliceblue;
}

.tonggh table tr:hover {
    color: brown;
    background-color: white;
   


}
.tonggh table tr:nth-child(1){
    color: brown;
    background-color: white;

}
.tonggh table tr:nth-child(1):hover {
    color: brown;
    background-color: white;
}
.tonggh button{
    width: 15%;
    padding: 1%;
    background-color: brown;
    color: white;
}

.tonggh input{
    width: 50%;
    padding: 4%;
    background-color: brown;
    color: white;
}

.tonggh button:hover,.tonggh input:hover {
    opacity: 0.7;
    /* Giảm độ mờ khi hover */

}
table{
    width: 80%;

}
.tonggh span,
button {
    margin: 3%;
}
    </style>
</head>

<div class="giohang">
    <h1>GIỎ HÀNG</h1>
    <div class="tonggh">
        <table>
            <?php
                view_cart1();    
            ?>
        </table>
        <?php
             
                ?>
    </div>


</div>

