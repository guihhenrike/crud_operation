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
        $selectSql = "SELECT id FROM clients WHERE username = :username";
        $selectStmt = $this->pdo->prepare($selectSql);
        $selectStmt->bindValue(':username', $_POST['username']);
        $selectStmt->execute();

        if ($selectStmt->rowCount() == 0) {
            $insertSql = "INSERT INTO clients(username, email, mobile) VALUES(:username, :email, :mobile)";
            $insertStmt = $this->pdo->prepare($insertSql);

            $insertStmt->bindValue(':username', $_POST['username']);
            $insertStmt->bindValue(':email', $_POST['email']);
            $insertStmt->bindValue(':mobile', $_POST['mobile']);

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

    public function update($id, $username, $email, $mobile) {
        // Verificar se os campos necessários estão presentes e não estão vazios
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mobile'])) {
            // Continuar com a atualização
            $updateSql = "UPDATE clients SET username = :username, email = :email, mobile = :mobile WHERE id = :id";
            $updateStmt = $this->pdo->prepare($updateSql);
            $updateStmt->bindValue(':username', $_POST['username']);
            $updateStmt->bindValue(':email', $_POST['email']);
            $updateStmt->bindValue(':mobile', $_POST['mobile']);
            $updateStmt->bindValue(':id', $id);
            $updateStmt->execute();
            return $updateStmt;
        } else {
            // Lidar com campos vazios (por exemplo, exibir uma mensagem de erro)
            echo "Campos não podem estar vazios.";
            // ou redirecionar de volta à página de edição
            header("Location: edit.php?id=$id");
            exit;
        }
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