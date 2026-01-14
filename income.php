<?php
include("../db.php");
if(isset($_POST['a'])){
 mysqli_query($conn,"INSERT INTO income(source,amount,date)
 VALUES('$_POST[source]',$_POST[amount],'$_POST[date]')");
}
?>
<form method="post">
<input name="source">
<input name="amount">
<input type="date" name="date">
<button name="a">Add</button>
</form>
