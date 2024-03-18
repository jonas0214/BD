<?php  

namespace App\Controllers;

use Database\MySQLi\Connection;

Class IncomexController{

    /**
     * Muestra una lista de este recurso
     */
    public function index(){}

    /**
     * Muestra un formulario para crear un nuevo recurso.
     */
    public function create(){}
    
    /**
     * Guarda un nuevo recurso en  la base de datos.
     */
    public function store($data){
        $connection = Connection::getInstance()->get_database_instance();
        
        $stmt = $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description)
        VALUES(?,?,?,?,?)");

        $stmt->bind_param("iisds",$payment_method, $type, $date, $amount, $description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

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