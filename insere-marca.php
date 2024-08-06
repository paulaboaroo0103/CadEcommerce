<?php
include('controller/conexao.php');
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
 
    if (empty($descricao)) {
        echo "<h3>Erro: Descrição é obrigatória!</h3><br><br>";
    } else {
 
        $cad_marca = "INSERT INTO marca (DESCRICAO) VALUES ('$descricao')";
        if (mysqli_query($mysqli, $cad_marca)) {
            echo "<h1>Marca Cadastrada com Sucesso!</h1><br>";
        } else {
            echo "Erro: ". mysqli_error($mysqli). "<br>";
        }
    }
}
 
mysqli_close($mysqli);
?>