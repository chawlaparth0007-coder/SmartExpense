<?php
include("../db.php");
$q=mysqli_query($conn,"SELECT expenses.*,workers.name FROM expenses
JOIN workers ON expenses.worker_id=workers.id");
while($r=mysqli_fetch_assoc($q)){
 echo $r['name']." - ".$r['title']." ₹".$r['amount']."<br>";
}
echo "<a href='add.php'>Add Expense</a>";
?>
