<?php
include 'config/Database.php';

$db = new Database();
$db->delete($_GET['id']);
header('Location: clients.php');
exit();
?>