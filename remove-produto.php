<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

$id = $_POST['id'];
$produtoDAO = new ProdutoDAO($conexao);
$produtoDAO->removeProduto($id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("Location: produto-lista.php");
die();

?>