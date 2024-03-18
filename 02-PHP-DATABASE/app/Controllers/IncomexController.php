<?php  

namespace App\Controllers;

use Database\PDO\Connection;

Class IncomexController{

    private $connection;
    
    public function __construct()   
    {
        $this-> connection = Connection::getInstance()->get_database_instance();;
    }

    /**
     * Muestra una lista de este recurso
     */
    public function index(){

        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt -> execute();

        $stmt->bindColumn("amount",$amount);
        $stmt->bindColumn("description",$description);


        while($stmt->fetch())
            echo"Ganaste $amount USD en: $description \n";
    }

    /**
     * Muestra un formulario para crear un nuevo recurso.
     */
    public function create(){}
    
    /**
     * Guarda un nuevo recurso en  la base de datos.
     */
    public function store($data){

        $stmt = $this->connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description)
        VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data['payment_method']);
        $stmt->bindValue(":type", $data[':type']);
        $stmt->bindValue(":date", $data[':date']);
        $stmt->bindValue(":amount", $data[':amount']);
        $stmt->bindValue(":description", $data[':description']);

        $stmt->execute();


        //$stmt->bind_param("iisds",$payment_method, $type, $date, $amount, $description);

        // $payment_method = $data['payment_method'];
        // $type = $data['type'];
        // $date = $data['date'];
        // $amount = $data['amount'];
        // $description = $data['description'];

        $stmt -> execute();

        echo"se han insertado {$stmt->affected_rows} filas en la base de datos";

    }
    
    /**
     *  {$data['payment_method']},
     * Muestra un único recurso especificado.
     */
    public function show(){}

    /**
     * Edita un único recurso.
     */
    public function edit(){}

    /**
     * Actualiza un recurso especifico en una base de datos.
     */
    public function update(){}

    /**
     * Elimina un recurso especifico.
     */
    public function destroy(){}


}