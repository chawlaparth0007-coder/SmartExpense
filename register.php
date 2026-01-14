<?php
include("db.php");
if(isset($_POST['register'])){
 $p=password_hash($_POST['password'],PASSWORD_DEFAULT);
 mysqli_query($conn,"INSERT INTO users(name,email,password)
 VALUES('$_POST[name]','$_POST[email]','$p')");
 header("Location: login.php");
}
?>
<form method="post">
<input name="name" required>
<input name="email" required>
<input type="password" name="password" required>
<button name="register">Register</button>
</form>
