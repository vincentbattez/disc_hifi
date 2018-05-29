<?php
// Il tout détruire la session
if(isset($_GET['action']) && $_GET['action']=="deconnexion") { 
    session_destroy();
    header('Location:login.php');
}
?>