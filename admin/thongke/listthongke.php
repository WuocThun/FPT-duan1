<div class="row">

    <div class="row frmtitle">
        <H1>Danh Sách Loại danh mục</H1>
    </div>
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên Danh mục</th>
                <th>Số lượng</th>
                <th>Giá thấp nhất</th>
                <th>Giá cao nhất</th>
                <th>Giá trung bình</th>
            </tr>
            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo ' <tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$minpricesp.',000</td>
                        <td>'.$maxpricesp.',000</td>
                        <td>'.$avgprice.'</td>
                </tr>';
            }
            ?>


        </table>
    </div>
    <div>
    <?php
     include "piechart.php";
    ?>
    </div>
    <div>
        <?php
        // include "linechart.php";

        ?>
    </div>
    <!-- <button>  <a href="index.php?act=piechar">Biểu đồ tròn </a></button> -->
    <div class="row formcontent">
    </div>
</div>