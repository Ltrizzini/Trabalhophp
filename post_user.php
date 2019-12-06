<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$sql_insert = "INSERT INTO usuario ( nome, email) VALUES ('$nome', '$email')";
$result_query = mysqli_query($connection, $sql_insert);

?>