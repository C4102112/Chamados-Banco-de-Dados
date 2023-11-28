<?php
$servername = "localhost";
$database = "chamados"; 
$username = "root";
$password = "root"; // obs: meu sql esta com senha !!!

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou. Erro: " . mysqli_connect_error());
}
?>
