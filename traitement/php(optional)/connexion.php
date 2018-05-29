<?php
session_start();
include("../divers/connexion.php");
include("../divers/balises.php");

//REMEMBER
if(isset($_POST['login'])==false && isset($_SESSION['id'])==false && isset($_COOKIE['remember'])) {
    $sql = 'SELECT * FROM utilisateur WHERE remember=?';
    $query = $pdo->prepare($sql);
    $query->execute(array($_COOKIE['remember']));
    $data = $query->fetch();
            $_SESSION['id'] = $data['id'];
            $_SESSION['login'] = $data['login'];
}

// Le formulaire a été soumis
if(isset($_POST['login']) && isset($_POST['pwd'])) {
    $sql = 'SELECT * FROM utilisateur WHERE login= ? AND pwd=md5(?)';
    $query = $pdo->prepare($sql);
    $query->execute(array($_POST['login'], $_POST['pwd']));
    $data = $query->fetch();
    if($data['id'] != NULL && $data['login'] != NULL){
        $_SESSION['id'] = $data['id'];
        $_SESSION['login'] = $data['login'];
    }

// REMEMBER
    if(isset($_POST['remember']) && $_POST['remember'] == 'on') {
        $q = md5(uniqid(true));
        setcookie('remember',$q,time()+3200*24*365);
        
        $sql = 'UPDATE utilisateur SET remember=? WHERE id=?';
        $query = $pdo->prepare($sql);
        $query->execute(array($q, $_SESSION['id']));
    }
}else
    $_SESSION['erreur'] = 'le login ou le mot de passe est incorrect';

header("Location:../affichage/mur.php?id=".$_SESSION['id']);

?>