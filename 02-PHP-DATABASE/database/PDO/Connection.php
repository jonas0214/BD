<?php  

namespace Database\PDO;


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
        $server ="127.0.0.1";
        $username ="jonathan";
        $password ="123";
        $database ="finanzas_personales";

        $conexion = new \PDO("mysql:host=$server; dbname=$database", $username, $password);

    $setnames = $conexion->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $conexion;

    }

 }