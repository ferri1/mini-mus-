<h1>Ecrire un fichier</h1>


<?php

$file = fopen("inscription.txt", "a+");

fwrite($file, "lyndaferri07gmail.com" . PHP_EOL);

fclose($file);

 ?>
