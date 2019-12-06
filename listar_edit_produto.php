<?php 
session_start();
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produto WHERE id = '$id' ";
$resultado_produto = mysqli_query ($connection, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<div class="container">
        <br>
        <h1 style="text-align: center;">Editar produto</h1>
        <br><br>
        <form action="edit_produto.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $row_produto['nome']; ?>"  id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descricao</label>
                <input type="text" class="form-control" name="desc"  value="<?php echo $row_produto['descricao']; ?>" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Preco</label>
                <input type="text" class="form-control" name="preco" value="<?php echo $row_produto['preco']; ?>" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <button type="submit" value="Salvar" class="btn btn-primary">Submit</button>
            <br><br>
            <button class="btn btn-primary"><a style="color: white; text-decoration: none;" href="listar_produtos.php">Listar produtos</a></button>
    </div>
    </form>