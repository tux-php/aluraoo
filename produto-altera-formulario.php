<?php
require_once("cabecalho.php");

$id = $_GET['id'];
$produtoDAO = new ProdutoDAO($conexao);
$produto = $produtoDAO->buscaProduto($id);

$categoriaDAO = new CategoriaDAO($conexao);
$categorias = $categoriaDAO->listaCategorias();

$selecao_usado = $produto->getUsado() ? "checked='checked'" : "";
$produto->setUsado($selecao_usado);

?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto->getId()?>">
	<table class="table">
		<?php include("produto-formulario-base.php"); ?>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>