<?
if(isset($_POST['send'])&&($_POST['send'])){
$role = $_POST['role'];
echo $role
}
?>
<form action="test.php">
    <select name="role" id="">
        <option  type="radio" name="addr" value="1">1
        <option  type="radio" name="addr" value="2">2
        </select>
    <input type="submit" value="" name="send"> Gửi
    </form>