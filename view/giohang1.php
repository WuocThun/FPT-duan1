<style>

* {
    text-decoration: none;
}
.tt_gh{
    padding: 7%;
    background-color: white;
}
.tt_gh h1{
    color: brown;
    font-size: 40px;
}
.backgr-w a{
    color: black;

}
</style>
</head>
<?php
extract($_SESSION['userdn']);
?>
<div class="tt_gh">
<h1 >
    Xin chào, <?=$user?>
</h1>

<div class="backgr-w">
    <a href="index.php?act=edit_taikhoan">Chỉnh sửa tài khoản</a> <br>
    <?php 
if ($role ==1) { ?>
    <a href="admin/index.php">Đăng nhập Admin</a> <br>
    <?php }?> 
    <a href="index.php?act=giohangcuatoi">Đơn hàng của tôi</a> <br>
    <a href="index.php?act=quenmk">Quên Mật khẩu</a> <br>
    <a href="index.php?act=thoat">Thoát</a> <br>
</div>
</div>
