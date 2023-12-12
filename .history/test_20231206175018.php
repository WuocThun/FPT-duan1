<?

$role = $_POST['role'];
echo $role;

?>
<form action="test.php" method="post">
<input type="radio" name="role" value="1"> 1
<input type="radio" name="role" value="2"> 2

<input type="submit" value="SEND" name="send">
    </form>
<?php
echo $role;
?>