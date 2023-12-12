<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role;
}
?>
<form action="test.php">
<input type="radio" name="role" value="1"> 1
<input type="radio" name="role" value="2"> 2


    </form>
<?php
echo $role;

?>