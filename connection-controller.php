<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = $_POST['mdp'];

$db_name = 'hermanos-sports1';
$db_host = '127.0.0.1';
$db_port = 3306;
$db_log = 'root';
$db_pw = '';

/* CONNEXION BDD */

$bdd = new PDO('mysql:dbname='.$db_name.';host='.$db_host.';port='.$db_port, $db_log, $db_pw);

/* CONNEXION USER */

$query3 = $bdd->prepare('SELECT nom, mot_de_passe FROM user WHERE nom = :nom');
$query3->execute(array(':nom' => $pseudo));
$user = $query3->fetch();

if($pseudo == $user['nom'] && $mdp == $user['mot_de_passe'] && $user != false){
session_start();

} else {

    header('Location: index.php?error');

}


