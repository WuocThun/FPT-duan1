<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role;
}
?>
<form action="test.php">
    <select name="role" id="">
        <option  name="addr" value="1">1
        <option name="addr" value="2">2
        </select><br>
    <input type="submit" value="Gửi" name="send"> 
    <?php
        echo $role;
    
    ?>
    </form>