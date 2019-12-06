<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST,'desc', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST,'preco', FILTER_SANITIZE_NUMBER_FLOAT);



    $result_produto = "UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id='$id'";
    $resultado_produto = mysqli_query($connection, $result_produto);


    if(mysqli_affected_rows($connection)){
        $_SESSION['msg'] = "<p>Usuario editado com sucesso</p>";
        header("Location: listar_produtos.php");
    }else{
        $_SESSION['msg'] = "<p>Usuario não foi editado com sucesso</p>";
        header("Location: listar_produtos.php");
    }
?>