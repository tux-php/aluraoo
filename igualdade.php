<?php
require_once'class/Produto.php';

$produto = new Produto();
$produto->setNome('ABADÁ');
$produto->setPreco(45.0);

$outroProduto = new Produto();
$outroProduto->setNome('ABADÁ');
$outroProduto->setPreco(45.0);

$produto = $outroProduto;


if($produto === $outroProduto){
    echo "Produtos iguais.</br>";
}else{
    echo "Produtos diferentes.</br>";
}
 

?>