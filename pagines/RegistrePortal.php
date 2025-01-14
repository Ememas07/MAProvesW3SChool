<?php
if ($_SERVER['REQUEST_METHOD' ] == 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $cognoms = htmlspecialchars($_POST['cognoms']);
    $idni = htmlspecialchars($_POST['idni']);
    $username = htmlspecialchars($_POST['username']);
    $clau = htmlspecialchars($_POST['clau']);
    $sexe = htmlspecialchars($_POST['sex']);
    $reclau = htmlspecialchars($_POST['reclau']);
    $email = htmlspecialchars($_POST['email']);
    $sexe = htmlspecialchars($_POST['sex']);
    $edat = htmlspecialchars($_POST['edat']);
    $pais_code = htmlspecialchars($_POST['pais_code']);
    $zip_code = htmlspecialchars($_POST['zip_code']);
    $interessos = htmlspecialchars($_POST['interessos']);
    $coment = htmlspecialchars($_POST['coment']);
    
    echo "<h1>  Nom: " .  $nom ."</h1>";
    echo "<h1>  Cognoms: " .  $cognoms ."</h1>";
    echo "<h1>  Dni: " .  $idni ."</h1>";
    echo "<h1>  Username: " .  $username ."</h1>";
    echo "<h1>  Clau: " .  $clau ."</h1>";
    echo "<h1>  Reclau: " .  $reclau ."</h1>";
    echo "<h1>  Email: " .  $email ."</h1>";
    echo "<h1>  Sexe: " . $sexe;
    echo "<h1>  Edat: " .  $edat ."</h1>";
    echo "<h1>  Pais_code: " .  $pais_code ."</h1>";
    echo "<h1>  Zip_code: " .  $zip_code ."</h1>";
    echo "<h1>  interessos: " .  $interessos ."</h1>";
    echo "<h1>  Coment: " .  $coment ."</h1>";
    include 'ToDB.php';

} else{
    echo "<h3> No s'ha enviat cap formulari" ."</h1>";
}

?>
