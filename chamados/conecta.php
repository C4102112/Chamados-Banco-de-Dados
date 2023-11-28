<?php
$servername = "localhost";
$database = "chamados"; 
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou. Erro: " . mysqli_connect_error());
}
?>
