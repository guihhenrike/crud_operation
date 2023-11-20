<?php
include 'config/Database.php';

$db = new Database();

// Verificar se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    $cliente_id = $_GET['id'];

    // Tentar realizar a atualização
    $resultado = $db->update($cliente_id);

    if ($resultado) {
        // Atualização bem-sucedida
        echo "Cliente atualizado com sucesso.";
    } else {
        // Falha na atualização
        echo "Erro ao atualizar o cliente.";
    }

    // Redirecionar para a página clients.php
    header('Location: clients.php');
    exit;
} else {
    // ID não presente na URL, lidar com isso de acordo com seus requisitos
    echo "ID do cliente não especificado.";
    // ou redirecionar de volta à página clients.php
    // header('Location: clients.php');
    // exit;
}
?>