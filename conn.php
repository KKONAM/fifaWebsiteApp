<?php

$dbhost = '127.0.0.1'; // localhost
$dbuname = 'root';
$dbpass = '';
$dbname = 'fifaDatabase'; //Database name


//$dbo = new PDO('mysql:host=abc.com;port=8889;dbname=$dbname, $dbuname, $dbpass);

$dbo = new PDO('mysql:host=' . $dbhost . ';port=3306;dbname=' . $dbname, $dbuname, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>
