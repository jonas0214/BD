<?php  

$server ="localhost";
$username ="jonathan";
$password ="123";
$database ="finanzas_personales";

$connecion = new PDO("mysql:host=$server; dbname=$database", $username, $password);

$setnames = $connecion->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);