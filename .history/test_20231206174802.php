<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role;
}
?>
<form action="test.php">
    
    <input type="submit" value="Gửi" name="send"> 
    <?php
        echo $role;
    
    ?>
    </form>