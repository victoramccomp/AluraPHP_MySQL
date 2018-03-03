<?php include("cabecalho.php")?>
<?php include("conecta.php")?>

<?php
    $result = mysqli_query($conn, 'SELECT * FROM produtos');

    while($produto = mysqli_fetch_assoc($result)) {
        
        echo $produto['nome'] . "<br>";
    };

?>

<?php include("rodape.php")?>