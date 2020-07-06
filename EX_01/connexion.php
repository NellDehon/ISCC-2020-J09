<!DOCTYPE html>
<html>
 
<body>
<form action="securite.php" method="post">
 <label for="login">login:</label>
 <input type="text" id="login" name="user_login">
 <label for="password"><br>password :</label>
 <input type="text2" id="password" name="user_password">
 
 <div class ="button">
 <input type="submit" value="valide">
 </div>
 </form>
<?php
 if(isset($_SESSION['user_id'])){
 setcookie("cookie", $_SESSION['user_id']);
 }
 
?>
</html>