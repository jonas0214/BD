<?php

$server ="localhost";
$username ="jonathan";
$password ="123";
$database ="finanzas_personales";

//$mysqli = mysqli_connect($server, $username, $password, $database);

$mysqli = new mysqli($server, $username, $password, $database);

//COMPROBAR CONECCION
if($mysqli -> connect_errno )
 die("falló la conexión: {$mysqli->connect_error}");

$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);