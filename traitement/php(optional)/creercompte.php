<meta charset="UTF-8"/>
<?php
session_start();
include("../divers/connexion.php");
include("../divers/balises.php");

$sql = 'SELECT * FROM utilisateur WHERE login= ? LIMIT 1';
$query = $pdo->prepare($sql);
$query->execute(array($_POST['login']));
$samelogin=false;
$img= "default.svg";
$errer="";

// Check dans le BDD s'il existe déjà le login rentré dans le formulaire
while($data = $query->fetch()) {
    $samelogin=true;
    $errer="Login déjà existant";
}
// NOM
if(isset($_POST['nom'])){
    if(!empty($_POST['nom'])){
        $nom = htmlentities($_POST['nom']);
    }else{$errer="Vous devez remplir tous les champs";}
}else{$errer="Vous devez remplir tous les champs";}

// PRENOM
if(isset($_POST['prenom'])){
    if(!empty($_POST['prenom'])){
        $prenom = htmlentities($_POST['prenom']);
    }else{$errer="Vous devez remplir tous les champs";}
}else{$errer="Vous devez remplir tous les champs";}

// Si on a écrit dans le formulaire login ET s'il n'existe pas déjà le login dans la BDD créer la variable $login
if(isset($_POST['login'])){
    if($samelogin==false){
        if(!empty($_POST['login'])){
            $login = htmlentities($_POST['login']);
        }else{$errer="Vous devez remplir tous les champs";}
    }else{$errer="Login déjà existant";}
}else{$errer="Vous devez remplir tous les champs";}

// Si on a écrit dans le formulaire mot de passe et et mot de passe = mot de passe confirmation créer la variable $pwd
if(isset($_POST['pwd'])){
    if($_POST['pwdconfirm'] == $_POST['pwd']){
        if(!empty($_POST['pwd'])){
            $pwd = md5($_POST['pwd']);
        }else{$errer="Vous devez remplir tous les champs";}
    }else{$errer="Les mots de passe ne sont pas identiques";}
}else{$errer="Vous devez remplir tous les champs";}


//Si les variables existes envoie les données dans la BDD :
if(isset($login) && isset($pwd) && isset($nom) && isset($prenom)){ 
    $sql = 'INSERT INTO utilisateur VALUES(NULL,?,?,?,?,NULL,?)';
    $query = $pdo->prepare($sql);
    $query->execute(array($login, $nom, $prenom, $pwd, $img));
    mkdir("../img/$login", 0777);
    mkdir("../img/$login/mur", 0777);
    mkdir("../img/$login/profil", 0777);
    $_SESSION["success"] = "Compte créer";
    $id = $pdo->lastInsertId();
    
    $_SESSION['id'] = $pdo->lastInsertId();
    $_SESSION['login'] = $login;
    header("Location:../affichage/mur.php?id=$id");
    
}else{
    header("Location:../affichage/creer.php");
    $_SESSION["erreur"] = $errer;
}
    



// Ca serait bien d'être loggé !
// A la fin on retourne à la page d'amitié :  il faut bien se faire des amis !
//header("Location:affichage/ami.php");
?>