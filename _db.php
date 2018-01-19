<?php

//inclure ici la connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO_Exception);

} catch (Exception $exception) {
    die('Error:' . $exeption->getMessage());
}

?>
