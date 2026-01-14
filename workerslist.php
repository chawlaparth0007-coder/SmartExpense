<?php
include("../db.php");
$q=mysqli_query($conn,"SELECT * FROM workers");
while($w=mysqli_fetch_assoc($q)){
 echo $w['name']." - ".$w['role']." ₹".$w['salary']."<br>";
}
echo "<a href='add.php'>Add Worker</a>";
?>