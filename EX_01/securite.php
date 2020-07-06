<?php
    $login=$_POST['login'];
    $password=$_POST['password'];


        if ($password ==  "2020"){
            session_start();
            $_SESSION['id']=$login;
            setcookie('id', $_SESSION['id'], time() +365*24*3600, null, null, false, true);
            header('Location: http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=1');
            exit();
        }
            

        else{
            echo '<h3>Mauvais couple identifiant / mot de passe.</h3>';
            echo '<p><A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=connexion">Réessayer</A></p>';
        }
?>