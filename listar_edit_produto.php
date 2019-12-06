<?php 
session_start();
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produto WHERE id = '$id' ";
$resultado_produto = mysqli_query ($connection, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>

    <form action="edit_produto.php" method="POST">
        <input type="hidden" name="id" value = "<?php echo $row_produto['id']; ?>"><br>
        Nome: <input type="text" name="nome" value="<?php echo $row_produto['nome']; ?>" ><br><br>
        Descricao: <input type="text" name="desc" value="<?php echo $row_produto['descricao']; ?>"><br><br>
        Preco: <input type="number" name="preco" value="<?php echo $row_produto['preco']; ?>"><br><br>
        <input type="submit" value="Salvar">
    </form>
