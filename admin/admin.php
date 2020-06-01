<?php

require "config.php";
verif_connection();


 ?>

 <?php include "include/head.php" ?>
  <div class="container">
    <p>lalali</p>

    <div class="identifiants">
      <table>
          <tr>
              <td>Email</td>
              <td><?php echo $_SESSION["emailadmin"] ?></td>
          </tr>
      </table>
    </div>

    <div class="administrer">

      <a href="admin.php">Réinitialiser le formulaire</a>

      <form method="post" action="admin.php" enctype="multipart/form-data">
          <!-- <input name="nomChamp" type="text" rows="5" cols="33"> -->
          <label for="mon_texte" >Texte à envoyer :</label>
          <textarea id="mon_texte" name="mon_texte" rows="5" cols="33"></textarea>
          <hr>
          Fichier à envoyer : <input name="mon_fichier" id="mon_fichier" type="file" />
          <!-- fichier -->
          <!-- destination : -->
          <hr>

          <button type="submit">Envoyer</button>
      </form>

        <?php
        // envoi de l'image :
        if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
          $nom_dossier_destination = "fichiers_envoyes/fichiers";// dossier de destination
          $chemin_dossier_destination = __DIR__ . "/" . $nom_dossier_destination; // dir = cste qui indique chemin de destination
          $chemin_fichier_destination = $chemin_dossier_destination . "/" . $_FILES["mon_fichier"]["name"];// nouveau nom

          move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);// lien vers le fichier
          echo "<a href='" . $nom_dossier_destination . "/" . $_FILES['mon_fichier']['name'] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante</a>";
        }
         ?>

          <div class="resultat_mon_texte">
          <?php
          if (isset($_POST['mon_texte'])) {
             echo $_POST["mon_texte"];
           }
           echo "<hr>";
          // envoi du texte :
          $fichier = fopen('fichiers_envoyes/textes/mon_fichier_texte.txt', 'a+');
          if (isset($_POST['mon_texte'])) {
            fwrite($fichier, "Mon message : " . $_POST['mon_texte'] . PHP_EOL);
          } else {
            fwrite($fichier, "aucun message" . PHP_EOL);
          }

          // Texte écrit dans le fichier txt :
          if (is_file("fichiers_envoyes/textes/mon_fichier_texte.txt")) {
            $contenuFichier = file_get_contents("fichiers_envoyes/textes/mon_fichier_texte.txt");
          } else {
            echo "ATTENTION - <br> <strong>fichiers_envoyes/textes/mon_fichier_texte.txt</strong> : ce fichier n'existe pas";
            exit;
          }
         ?>
         <p> Le contenu de mon_fichier_texte.txt est : </p>
         <?php
          echo str_replace(PHP_EOL, "<br>", $contenuFichier) ;
         ?>
         <a href="effacer_texte.php">effacer le contenu de <strong>mon_fichier_texte.txt</strong></a>
         </div>


    </div>

  </div>

<?php include "include/footer.php" ?>
