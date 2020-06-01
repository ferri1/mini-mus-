<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- font awesome link -->
   <script src="https://kit.fontawesome.com/682d71be2a.js" crossorigin="anonymous"></script>
    <!-- lien bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo $_url_base. $_dossier_template ?>css/style.css"/>
    <title><?php echo isset($title_page) ? $title_page : strtoupper($nom_du_musee) . " - Musee" ?></title>
</head>
