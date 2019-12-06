<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$sql_insert = "INSERT INTO produto (nome, descricao, preco) VALUES ('$nome', '$desc', '$preco')";
$result_query = mysqli_query($connection, $sql_insert);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: listar_produtos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: listar_produtos.php?id=$id");
}

?>