<?php
session_start();

function verif_connection() {
  if (empty($_SESSION["a_le_droit_de_se_connecter"])) {
    header("location:connexion.php");
  }
}
verif_connection();

function deconnexion() {}
 ?>
