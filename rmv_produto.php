<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $sql_rmv = "DELETE FROM produto WHERE id='$id'";
    $result_query = mysqli_query($connection, $sql_rmv);
    if(mysqli_affected_rows($connection)){
        $_SESSION['msg'] = "<p> Usuario deletado com sucesso </p>";
        header("Location: listar_produtos.php");
    }else{
        $_SESSION['msg'] = "<p>Erro ao deletar o usuario</p>";
        header("Location: listar_produtos.php");
    }
?>