<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA DO TÉCNICO</title>
</head>
<body>
    <center>
        <h1>CONSULTA DO TÉCNICO</h1>
        <table border="1">
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Problema</th>
                <th>Sala</th>
                <th>Descrição</th>
                <th>Hora de Cadastro</th>
                <th>Ação</th>
            </tr>
            <?php
            require("conecta.php");
            
            $consulta = "SELECT RA, NOME, PROBLEMA, SALA, DESCRICAO, DATECAD, RESOLVIDO, id FROM chamados 
            inner join problemas
            on chamados.problema_id = problemas.problema_id
            where RESOLVIDO = 0";
            $resultado = mysqli_query($conn, $consulta);
            echo "<form action='resolver.php' method='post'>";
            while ($linha = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $linha['RA'] . "</td>";
                echo "<td>" . $linha['NOME'] . "</td>";
                echo "<td>" . $linha['PROBLEMA'] . "</td>";
                echo "<td>" . $linha['SALA'] . "</td>";
                echo "<td>" . $linha['DESCRICAO'] . "</td>";
                echo "<td>" . $linha['DATECAD'] . "</td>";
                if ($linha['RESOLVIDO'] == 0) {
                    echo "<td><input type='submit' name=enviar[".$linha['id']."] value='Resolver'> "."</td>";
                } else {
                    echo "<td>Resolvido</td>";
                }
                echo "</tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
    </center>
</body>
</html>
