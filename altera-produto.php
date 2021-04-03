<?php
require_once("cabecalho.php");



$categoria_id = $_POST['categoria_id'];
$tipoProduto = $_POST['tipoProduto'];
$factory = new ProdutoFactory();
$produto = $factory->criaPor($tipoProduto,$_POST);
$produto->atualizaBaseadoEm($_POST);
$produto->getCategoria()->setId($categoria_id);

if(array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
} else {
	$produto->setUsado("false");
}
$produto->setId($_POST['id']);
$produtoDAO = new ProdutoDAO($conexao);
if($produtoDAO->alteraProduto($produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPreco() ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>