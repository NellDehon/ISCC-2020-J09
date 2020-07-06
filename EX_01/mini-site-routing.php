<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<header>
    <h1>Mini-site-routing</h1>
</header>

<nav>
         <a href="mini-site-routing.php?page=1">Accueil</a>
         <a href="mini-site-routing.php?page=2">Page 2</a>
         <a href="mini-site-routing.php?page=3">Page 3</a>
         <a href="mini-site-routing.php?page=connexion">Connexion</a>
         <?php
         if(isset($_SESSION['user_id'])){
             echo"<<a href='mini-site-routing.php?page=admin'>Admin</a>";
         }
         ?>
                
</nav>

<?php
function afficher_pages()
{
    if ($_GET['page'] == 1) {
        echo "Accueil !";
    }
else if ($_GET['page'] == 2) {
    echo "Page 2!";
} else if ($_GET['page'] == 3) {
    echo "Page 3!";
} else if ($_GET['page'] == "connexion") {
    echo "connexion";
    include 'connexion.php';
}
else if($_GET['page'] == "admin"){
    echo "admin";
    include('admin.php');
}
}

afficher_pages();
?>
<p>
    <?php
    function verifier_session(){
    if (isset($_SESSION['user_id'])) {
        echo "Login :" , $_SESSION['user_id'];
    }
    elseif(isset($_COOKIE['cookie'])){
        setcookie("cookie", $_SESSION['user_id']);
    }
    else{
        header("Location: connexion.php");

    }
}
    verifier_session();
    ?>
</p>


</body>
</html>