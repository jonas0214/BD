<?php

namespace Database\MySQLi;

 class Connection {
    
    private static $instance;
    private $connection;

    public function __construct() {
        $this->make_connection();
    }

    public static function getInstance(){

        if(!self::$instance instanceof self)
            self::$instance = new self();

        return self :: $instance;


    }

    public function get_database_instance(){
        return  $this->connection;
    }



    private function make_connection(){
        $server ="localhost";
        $username ="jonathan";
        $password ="123";
        $database ="finanzas_personales";

        //$mysqli = mysqli_connect($server, $username, $password, $database);

        $mysqli = new \mysqli($server, $username, $password, $database);

        //COMPROBAR CONECCION
        if($mysqli -> connect_errno )
        die("falló la conexión: {$mysqli->connect_error}");

        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $mysqli;

    }

 }

