<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$sql_insert = "INSERT INTO produto (nome, descricao, preco) VALUES ('$nome', '$desc', '$preco')";
$result_query = mysqli_query($connection, $sql_insert);

?>