<!-- client side/front end para cliente editar produto -->

<h1>Editar Produto</h1>
<!-- inicio do código PHP para editar produto -->

<?php 
	$sql = "SELECT * FROM tb_produtos WHERE cod_prod=".$_REQUEST["cod_prod"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>

<!-- fim código PHP -->

<!-- inicio do formulário para edição de produtos -->

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="cod_prod" value="<?php print $row->cod_prod; ?>">
	
	<div class="cod-prod">
		<label>Código do produto:</label>
		<input type="number" name="cod_prod" value="<?php print $row->cod_prod; ?>" class="form-control" placeholder="Máximo 8 números" maxlength="8" required>
		
	</div>
	<div class="nome-prod">
		<label>Nome do produto:</label>
		<input type="text" name="desc_prod" value="<?php print $row->desc_prod; ?>" class="form-control" placeholder="Exemplo: Computador" maxlength="40">
	</div> <br>

	<div class="cor-prod">
		<label>Cor do produto: </label>
		<input type="text" name="cor_prod" value="<?php print $row->cor_prod; ?>" class="form-control" placeholder="Exemplo: Vermelho" maxlength="20" required>

	</div> <br>

	<div class="preco-prod">
		<label>Preço do produto</label>
		<input type="number" name="preco_prod" value="<?php print $row->preco_prod; ?>" class="form-control" placeholder="Exemplo: 199.90" min="1" step="any" required>
	</div>
	<div class="dt-inclu-prod">
		<label>Data da inclusão do produto:</label>
		<input type="date" name="dt_inclu_prod" value="<?php print $row->dt_inclu_prod; ?>" class="form-control" required>
	</div>
	<div class="loj-prod">
		<label>Código da loja do produto:</label>
		<input type="number" name="loj_prod" value="<?php print $row->loj_prod; ?>" class="form-control" placeholder="Exemplo: 1 ou 2" maxlength="1" required>
	</div>
	<div class="botao-envio">
		<button type="submit">EDITAR PRODUTO</button>
	</div>


</form>

<!-- fim do formulário -->