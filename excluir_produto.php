<?php
include_once("conexao.php");
$id = $_POST['id'];
$sql_insert = "DELETE FROM produto WHERE '$id'=$id";
$result_query = mysqli_query($connection, $sql_insert);

?>