<?php include("cabecalho.php")?>

<?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $conn = mysqli_connect('localhost', 'root', '', 'alura_phpmysql_loja');

    $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
    if(mysqli_query($conn, $query)) {?>
        <p class="alert-success"> Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!!! </p>
    <?php } else { ?>
        <p class="alert-danger"> Produto <?= $nome; ?>não foi adicionado!!! </p>
    <?php } ?>


<?php include("rodape.php")?>