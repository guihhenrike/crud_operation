<?php
include 'config/Database.php';

$db = new Database();

if (isset($_GET['id'])) {
    $client_id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    if (!empty($username) && !empty($email) && !empty($mobile)) {
        $result = $db->update($client_id, $username, $email, $mobile);

        if ($result) {
            header('Location: clients.php');
            exit;
        } else {
            echo "Erro ao atualizar o cliente.";
        }
    } else {
        // Lidar com campos vazios (por exemplo, exibir uma mensagem de erro)
        echo "Campos não podem estar vazios.";
        // ou redirecionar de volta à página de edição
        header("Location: edit.php?id=$cliente_id");
        exit;
    }
} else {
    // Lidar com o ID do cliente vazio
    echo "ID do cliente não especificado.";
    header('Location: clients.php');
    exit;
}
?>
