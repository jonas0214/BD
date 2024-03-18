<?php  

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawallsController {

    /**
     * Muestra una lista de este recurso.
     */
    public function index() {}

    /**
     * Muestra un formulario para crear un nuevo recurso.
     */
    public function create() {}
    
    /**
     * Guarda un nuevo recurso en la base de datos.
     */
    public function store($data) {
        
        $connection = Connection::getInstance()->get_database_instance(); // Obtener la instancia de la conexión PDO a la base de datos.
        
        $stmt = $connection->prepare("INSERT INTO withdrawals(payment_method, type, date, amount, description)
        VALUES(:payment_method, :type, :date, :amount, :description)");
        
        $stmt->bindParam(":payment_method", $data["payment_method"]);
        $stmt->bindParam(":type", $data["type"]);
        $stmt->bindParam(":date", $data["date"]);
        $stmt->bindParam(":amount", $data["amount"]);
        $stmt->bindParam(":description", $data["description"]);

        $stmt->execute();
    }
    
    /**
     * Muestra un único recurso especificado.
     */
    public function show() {}

    /**
     * Edita un único recurso.
     */
    public function edit() {}

    /**
     * Actualiza un recurso especifico en una base de datos.
     */
    public function update() {}

    /**
     * Elimina un recurso especifico.
     */
    public function destroy() {}
}
