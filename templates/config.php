<?php
session_start();
$nom_du_musee = "Musee de l'Homme";

$_dossier_template = "templates/"; // repertoire dans lequel j'ai mis l'ensemble des gabarits de mon site

$_url_base = "http://localhost/mini-musé/";
//  c'est l'url pour accéder à la page d'accueil de mon site.
//  si la racine de mon site était https://www.mon_super_resto.com/,
//  $_url_base = "https://www.mon_super_resto.com/";
function verif_connexion(){
  if(empty($_SESSION["droit_connexion"])){
    header("location:connexion.php");
  }
}
