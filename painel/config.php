<?php
require 'environment.php';

   define("BASE", "http://localhost/EAD/painel/");

$config = array();
if(ENVIRONMENT == 'development') {
   $config['dbname'] = 'ead';
   $config['host'] = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = 'root';
} else {
   define("BASE_URL", "http://meusite.com.br/");
   $config['dbname'] = 'ead';
   $config['host'] = 'localhost';
   $config['dbuser'] = 'root';
   $config['dbpass'] = 'root';
}
global $db;
try {
   $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
   echo "ERRO: ".$e->getMessage();
   exit;
}