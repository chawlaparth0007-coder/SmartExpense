<?php
include("../db.php");
if(isset($_POST['a'])){
 mysqli_query($conn,"INSERT INTO workers(name,role,salary)
 VALUES('$_POST[name]','$_POST[role]',$_POST[salary])");
}
?>
<form method="post">
<input name="name">
<input name="role">
<input name="salary">
<button name="a">Add</button>
</form>
