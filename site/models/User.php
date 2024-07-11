<?php
require_once 'config/config.php';

class User {
    private $conn;
    private $table_name = "usuarios";

    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function login($email, $password) {

        $query = "SELECT * FROM " . $this->table_name . " WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    
    public function register($username, $password, $email)
    {
        // Verificar si el usuario o email ya existen
        $query = "SELECT username, email FROM " . $this->table_name . " WHERE username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $email);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            // Ya existe un usuario o email en la base de datos
            return false;
        } else {
            // Insertar el nuevo usuario
            $query = "INSERT INTO " . $this->table_name . " (username, password, email) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $stmt->bindParam(3, $email);
    
            if ($stmt->execute()) {
                return true; // Registro exitoso
            } else {
                return false; // Error al registrar
            }
        }
    }
    
}
?>
