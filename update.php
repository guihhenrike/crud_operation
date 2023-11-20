<?php
include 'config/Database.php';

$db = new Database();

// Verificar se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    $cliente_id = $_GET['id']; // Usar $_GET para obter o ID da URL
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Verificar se os campos necessários estão presentes e não estão vazios
    if (!empty($username) && !empty($email) && !empty($mobile)) {
        $resultado = $db->update($cliente_id, $username, $email, $mobile);

        if ($resultado) {
            // Atualização bem-sucedida
            echo "Cliente atualizado com sucesso.";
            header('Location: clients.php');
            exit;
        } else {
            // Falha na atualização
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
    // ID não presente na URL, lidar com isso de acordo com seus requisitos
    echo "ID do cliente não especificado.";
    header('Location: clients.php');
    exit;
    // ou redirecionar de volta à página clients.php
    // header('Location: clients.php');
    // exit;
}
?>
