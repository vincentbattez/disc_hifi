<?php
    if(isset($_SESSION["erreur"]) && $_SESSION["erreur"] != "" && !empty($_SESSION["erreur"])){   
        echo 
            '
            <div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong>ATTENTION !</strong> '.$_SESSION["erreur"].'
            </div>
            ';
        unset($_SESSION["erreur"]);
    }
    if(isset($_SESSION["success"]) && $_SESSION["success"] != "" && !empty($_SESSION["success"])){   
        echo 
            '
            <div class="alert alert-success alert-dismissible fade in text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong>Succès !</strong> '.$_SESSION["success"].'
            </div>
            ';
        unset($_SESSION["success"]);
    }
?>