<?php
include 'config/Database.php';


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = new Database();
    $sql->insert();
    header('Location: clients.php');

} else {
    header('Location: index.php');
}

?>