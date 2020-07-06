<?php
session_start();
?>
 
<p>
<?php
$login=$_POST['user_login'];
$pass=$_POST['user_password'];
?>
</p>
 
<p>
<?php
 if($pass == 2020){
 $_SESSION['user_id']=$_POST['user_login'];
 header('Location: mini-site-routing.php?page=1');
 }
 else{
 echo "Mauvais couple identifiant/ mot de passe ";
 echo "<a href='mini-site-routing.php?page=connexion'>connexion </a>";
 }
 ?>
 </p>