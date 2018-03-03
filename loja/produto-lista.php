<?php include("cabecalho.php")?>
<?php include("conecta.php")?>
<?php include("banco-produto.php")?>

<table class="table table-striped">

    <?php
        $produtos = listarProdutos($conn);

        foreach($produtos as $produto) :
    ?>
            <tr>
                <td> <?= $produto['nome'] ?></td>
                <td> <?= $produto['preco'] ?></td>
            </tr>
    <?php
        endforeach
    ?>

</table>

<?php include("rodape.php")?>