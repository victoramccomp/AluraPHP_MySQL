<?php

    function listarProdutos($conn) 
    {
        $produtos = array();
        $result = mysqli_query($conn, 'SELECT * FROM produtos');

        while($produto = mysqli_fetch_assoc($result)) 
        {        
            array_push($produtos, $produto);
        };

        return $produtos;
    }

    function inserirProduto($conn, $nome, $preco) 
    {
        $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
        return mysqli_query($conn, $query);
    }