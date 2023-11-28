<?php
    require("conecta.php");

    foreach($_POST['enviar'] as $id=>$value){
        $sql = "UPDATE chamados set RESOLVIDO = 1 WHERE id = '$id' ";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Registro Excluído com Sucesso</h1>";
        echo "<a href='http://localhost/chamados/'><input type='button' value='Voltar'></a></center>";
      } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }
?>