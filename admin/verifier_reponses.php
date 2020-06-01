<?php
session_start();

if(
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    $_POST["email"] == "admin@gmail.com" &&
    $_POST["password"] == "admin2020"
    ) {
    $_SESSION["a_le_droit_de_se_connecter"] == TRUE;
    // $_SESSION["emailadmin"] = $_POST["email"];
    header ("location:admin.php");

} else {
    header ("location:connexion.php");
};



// $nomChampsObligatoires = array("email", "password");
//
// foreach($nomChampsObligatoires as $nomChamp) {
//
//     if( empty($_POST[$nomChamp])) {
//
//         $_SESSION["err"] = "CHAMP";
//         $_SESSION["champ_erreur"] =  $nomChamp;
//
//         header("location:connexion.php");
//         exit;
//
//     }
// }
?>
