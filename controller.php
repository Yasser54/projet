<?php

$db_name = 'hermanos-sports1';
$db_host = '127.0.0.1';
$db_port = 3306;
$db_log = 'root';
$db_pw = '';

/* CONNEXION BDD */

$bdd = new PDO('mysql:dbname='.$db_name.';host='.$db_host.';port='.$db_port, $db_log, $db_pw);

/* SELECTION DES DONNEES */

$query = $bdd->query('SELECT * FROM contacts');
$contacts = $query->fetchAll();
