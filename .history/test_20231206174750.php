<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role;
}
?>
<form action="test.php">
    <select name="role" id="">
        <option   value="1">1
        <option  value="2">2
        </select><br>
    <input type="submit" value="Gửi" name="send"> 
    <?php
        echo $role;
    
    ?>
    </form>