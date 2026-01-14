<?php
session_start();
include("db.php");
$inc=mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(amount) t FROM income"))['t'];
$exp=mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(amount) t FROM expenses"))['t'];
$profit=$inc-$exp;
?>
<h2>Income ₹<?php echo $inc;?></h2>
<h2>Expense ₹<?php echo $exp;?></h2>
<h1>Profit/Loss ₹<?php echo $profit;?></h1>

<a href="workers/list.php">Workers</a> |
<a href="expenses/list.php">Expenses</a> |
<a href="income/add.php">Income</a> |
<a href="logout.php">Logout</a>
