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
</head>
<?php
extract($onesp);
    $img = $img_path. $imgsp;
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
            <?=$des?>
        </p>
        <div class="rating">
            <input value="5" name="rating" id="star5" type="radio">
            <label for="star5"></label>
            <input value="4" name="rating" id="star4" type="radio">
            <label for="star4"></label>
            <input value="3" name="rating" id="star3" type="radio">
            <label for="star3"></label>
            <input value="2" name="rating" id="star2" type="radio">
            <label for="star2"></label>
            <input value="1" name="rating" id="star1" type="radio">
            <label for="star1"></label>
        </div>

        <div class="row-flex">
            <a href="index.php?act=thanhtoan">
                <button>Mua ngay</button></a> <button>Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>

<div class="tableBl">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan.php", {idpro: <?=$id?>});
        });
        </script>

    <table class="bl" id="binhluan">
 
    </table>
    
</div>