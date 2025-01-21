<?php
if ($_SERVER['REQUEST_METHOD' ] == 'POST') {
    $usuari = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);
    echo "<h1> Nom d'usuari: " . $usuari ."</h1>"; 
    echo "<h1> Contrassenya: " . $pass ."</h1>";
} else{
    echo "<h1> No s'ha enviat cap formulari" ."</h1>";
}





?>