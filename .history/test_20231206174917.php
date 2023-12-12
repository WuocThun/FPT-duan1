<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role;
}
?>
<form action="test.php">
<input type="radio" name="role" value="male"> Male
<input type="radio" name="role" value="female"> Female


    </form>
<?php
echo $role;

?>