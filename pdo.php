<?php
$hote="localhost";
$utilisateur="root";
$mot_pass="";
$bdd="etudiant";

$connection=new PDO ("mysql:host=" .$hote. ";dbname=" .$bdd, $utilisateur, $mot_pass);