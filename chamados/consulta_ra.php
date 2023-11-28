<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA POR RA</title>
</head>
<body>
    <center>
        <h1>CONSULTA RA</h1>
        <form method="POST" action="consulta_ra.php">
            <label for="ra">RA do Aluno: </label>
            <input type="number" name="ra">
            <input type="submit" value="Consultar">
        </form>
        <table border="1">
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Problema</th>
                <th>Sala</th>
                <th>Descrição</th>
                <th>Hora de Cadastro</th>
                <th>Resolvido</th>
            </tr>
            <?php
            require("conecta.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ra = $_POST["ra"];

                $consulta = "SELECT RA, NOME, PROBLEMA, SALA, DESCRICAO, DATECAD, RESOLVIDO, id FROM chamados 
                inner join problemas
                on chamados.problema_id = problemas.problema_id
                where ra = $ra";
                $resultado = mysqli_query($conn, $consulta);

                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $linha['RA'] . "</td>";
                    echo "<td>" . $linha['NOME'] . "</td>";
                    echo "<td>" . $linha['PROBLEMA'] . "</td>";
                    echo "<td>" . $linha['SALA'] . "</td>";
                    echo "<td>" . $linha['DESCRICAO'] . "</td>";
                    echo "<td>" . $linha['DATECAD'] . "</td>";
                    if ($linha['RESOLVIDO'] == 1) {
                        echo "<td>Resolvido</td>";
                    } else {
                        echo "<td>Não Resolvido</td>";
                        echo "<td>N/A</td>";
                    }
                    echo "</tr>";
                }

            }
            ?>
        </table>
    </center>
</body>
</html>
