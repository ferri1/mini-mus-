<?php include "include/head.php" ?>


  <div class="main">

    <h2>formulaire de connexion</h2>

    <form class="" action="verifier_reponses.php" method="post">

      <!-- Fonctions -->
      <?php if (!empty($_POST['err']) && $_POST['err'] == 'champ') {
          echo "<div class=\"error\">";
          echo "merci de vérifier que tous les champs soient remplis";
          echo "</div>";
          }
          function addClassErreurChamp($champVide) {
            if (!empty($_POST['problemechamp']) && $_POST['problemechamp'] == $champVide) {
              echo "erreurchamp";
            }
          }
         ?>
         <!-- fin fonctions -->

      <div class="champ <?php addClassErreurChamp("email"); ?>">
        <label for="email">email : </label>
        <input name="email" type="email"><br>
      </div>
      <div class="champ <?php addClassErreurChamp("password"); ?>">
        <label for="password">mot de passe : </label>
        <input name="password" type="password"><br>
      </div>

      <button type="submit">valider</button>

    </form>

  </div>

<?php include "include/footer.php" ?>
