<?php
require("conecta.php"); // Certifique-se de que a conexão com o banco de dados está configurada

$RA_aluno = $_POST["RA_aluno"]; // Supondo que você ainda precise do RA
$nome_aluno = $_POST["nome_aluno"]; // Supondo que você ainda precise do nome
$prob_aluno = $_POST["prob_aluno"];
$desc_aluno = $_POST["desc_aluno"];
$sala_aluno = $_POST["sala_aluno"];

// Insira os dados na tabela chamados
$inserir_chamado = "INSERT INTO chamados (RA, NOME, PROBLEMA_ID, DESCRICAO, SALA, RESOLVIDO)  VALUES ('$RA_aluno', '$nome_aluno', '$prob_aluno', '$desc_aluno', '$sala_aluno', 0)";

if ($conn->query($inserir_chamado) === TRUE) {
    echo "<center><h1>Cadastrado Com Sucesso</h1>";
    echo "<a href='http://localhost/chamados/'><input type='button' value='Voltar'></a></center>";
} else {
    echo "Erro ao cadastrar chamado: " . mysqli_error($conn);
}
?>
