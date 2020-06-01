<?php include  "config.php";
 include  $_dossier_template . "include/head.php"; ?>

<body>
  <?php include $_dossier_template .  "include/navigation.php"; ?>
  <main>




       <h1>Je vous présente une liste d'Artiste</h1>
      <p>Découvrez les meilleurs artistes et photographes du Web ! Des conseils pour apprendre à photographier comme un pro ou pour créer des portfolios originaux ainsi qu’une bonne dose d’inspiration !</p>
      <div class="aligné">
          <div class="gallery">
              <a target="_blank" href="img_5terre.jpg">
              <img src="templates/images/peinture.png" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">Tableau magnifique realisé par un grand artiste Omar</div>
          </div>

          <div class="gallery">
              <a target="_blank" href="img_5terre.jpg">
              <img src="templates/images/grav-bois.jpg" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">des belles gravur faite par le graveur Nael</div>
          </div>

          <div class="gallery">
              <a target="_blank" href="img_lights.jpg">
              <img src="templates/images/sculptur.jpg" alt="Northern Lights" width="600" height="400">
              </a>
              <div class="desc">un grands sculpture bois animaux monsieur Krunch</div>
          </div>

          <div class="gallery">
              <a target="_blank" href="img_mountains.jpg">
              <img src="templates/images/peinture3.jpg" alt="Mountains" width="600" height="400">
              </a>
              <div class="desc">Add a description of the image here</div>
          </div>

    </div>

  <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Photographe, peintre, graveur ..." aria-label="Search" style ="width:770px; margin-left:98px;">

          <div class="custom-select" style="width:142px;">
              <select>
                <option value="0"> Photographe</option>
                <option value="1"> Peintre </option>
                <option value="2"> Graveur </option>
              </select>
        </div>

        <button class="btn btn-warning my-2 my-sm-0" type="submit" style="margin-left:10px;"> Rechercher </button>
      </form>
    </nav>
     <img src="templates/images/fond.jpg" alt="" class="image-artistes">
     <p>Soleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.</p>
     <h3 class="font">Promenade-artistique</h3>
     <p>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser librement dans vos maquettes.</p>


  <div class="div-categoryContainer">

      	<img src="templates/images/photos.jpg" class="picture-left">
        <div class="paragraph-right">
          <h2>Tableau & Statues </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

  </div>
  </main>


    <br>
    <hr>
        <?php include $_dossier_template . "include/footer.php" ?>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
