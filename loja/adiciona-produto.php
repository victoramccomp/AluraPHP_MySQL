<?php include("cabecalho.php")?>
<?php include("cabecalho.php")?>
<?php

    function inserirProduto($conn, $nome, $preco) 
    {
        $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
        return mysqli_query($conn, $query);
    }

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    
    if(inserirProduto($conn, $nome, $preco)) {?>
        <p class="text-success"> Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!!! </p>
        <?php } else { 
            $msg = mysqli_error($conn);
        ?>
        <p class="text-danger"> Produto <?= $nome; ?>não foi adicionado!!! </p>
        <p class="text-danger"> ERRO: <?= $msg; ?></p>
    <?php 

    } 
    ?>


<?php include("rodape.php")?>