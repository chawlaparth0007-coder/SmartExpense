<?php
session_start();
include("db.php");
if(isset($_POST['login'])){
 $q=mysqli_query($conn,"SELECT * FROM users WHERE email='$_POST[email]'");
 $u=mysqli_fetch_assoc($q);
 if(password_verify($_POST['password'],$u['password'])){
  $_SESSION['uid']=$u['id'];
  header("Location: dashboard.php");
 }
}
?>
<form method="post">
<input name="email">
<input type="password" name="password">
<button name="login">Login</button>
</form>
