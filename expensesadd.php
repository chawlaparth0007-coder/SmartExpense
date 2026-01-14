<?php
include("../db.php");
$w=mysqli_query($conn,"SELECT * FROM workers");
if(isset($_POST['a'])){
 mysqli_query($conn,"INSERT INTO expenses(worker_id,title,amount,category,date)
 VALUES($_POST[worker],'$_POST[title]',$_POST[amount],'$_POST[category]','$_POST[date]')");
}
?>
<form method="post">
<select name="worker">
<?php while($r=mysqli_fetch_assoc($w)){ ?>
<option value="<?=$r['id']?>"><?=$r['name']?></option>
<?php } ?>
</select>
<input name="title">
<input name="amount">
<input name="category">
<input type="date" name="date">
<button name="a">Add</button>
</form>
