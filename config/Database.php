<?php

class Database
{
    private $pdo;
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "root";
        $this->db = "crud_operation";

        // Create a PDO instance
        try{
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    
    }


    public function insert()
    {
        // Check if the client already exists
        $selectSql = "SELECT id FROM clients WHERE username = :username";
        $selectStmt = $this->pdo->prepare($selectSql);
        $selectStmt->bindValue(':username', $_POST['username']);
        $selectStmt->execute();

        // If the client doesn't exist, insert it
        if ($selectStmt->rowCount() == 0) {
            // Prepare the SQL statement
            $insertSql = "INSERT INTO clients(username, email, mobile) VALUES(:username, :email, :mobile)";
            $insertStmt = $this->pdo->prepare($insertSql);

            // Bind the values to the parameters
            $insertStmt->bindValue(':username', $_POST['username']);
            $insertStmt->bindValue(':email', $_POST['email']);
            $insertStmt->bindValue(':mobile', $_POST['mobile']);

            // Execute the statement
            $insertStmt->execute();
        } else {
            header('Location: index.php?error=client_already_exists');
            exit;
        }
    }

    public function select() {
        $selectSql = "SELECT * FROM clients";
        $selectStmt = $this->pdo->prepare($selectSql);
        $selectStmt->execute();
        return $selectStmt;
        
    }

    public function selectById($id) {
        $selectSql = $this->pdo->prepare("SELECT * FROM clients WHERE id = :id");
        $selectSql->bindValue(':id', $id);
        $selectSql->execute();

        $result = $selectSql->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function delete($id) {
        $deleteSql = "DELETE FROM clients WHERE id = :id";
        $deleteStmt = $this->pdo->prepare($deleteSql);
        $deleteStmt->bindValue(':id', $id);
        $deleteStmt->execute();
        return $deleteStmt;
    }

}




?>