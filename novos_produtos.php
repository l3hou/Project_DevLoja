<!-- página client side para cadastrar novos produtos -->

<h1>Novo Produto</h1>

<!-- inicio da DIV para cadastro de produto -->

<div class="cadastro-produto">
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="cod-prod">
		<label>Código do produto:</label>
		<input type="number" name="cod_prod" class="form-control" placeholder="Máximo 8 números" maxlength="8" required>
	</div>
	<div class="nome-prod">
		<label>Nome do produto: </label>
		<input type="text" name="desc_prod" class="form-control" placeholder="Exemplo: Computador" maxlength="40">
	</div> <br>

	<div class="cor-prod">
		<label>Cor do produto: </label>
		<input type="text" name="cor_prod" class="form-control" placeholder="Exemplo: Vermelho" maxlength="20" required>

	</div> <br>

	<div class="preco-prod">
		<label>Preço do produto:</label>
		<input type="number" name="preco_prod" class="form-control" placeholder="Exemplo: 199.90" min="1" step="any" required>
	</div>
	<div class="dt-inclu-prod">
		<label>Data da inclusão do produto:</label>
		<input type="date" name="dt_inclu_prod" class="form-control" required>
	</div>
	<div class="loj-prod">
		<label>Código da loja do produto:</label>
		<input type="number" name="loj_prod" class="form-control" placeholder="Exemplo: 1 ou 2" maxlength="1" required>
	</div>
	<div class="botao-envio">
		<button type="submit">CADASTRAR PRODUTO</button>
	</div>


</form>
</div>

<!-- fim da div -->

















<!-- antigo
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Produtos - Loja do Dev</title>
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>

	<h1>Novo Produto</h1>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="cod-prod">
		<label>Código do produto</label>
		<input type="number" name="cod_prod" class="form-control" placeholder="Máximo 8 números" maxlength="8" required>
	</div>
	<div class="nome-prod">
		<label>Nome do produto</label>
		<input type="text" name="desc_prod" class="form-control" placeholder="Exemplo: Computador" maxlength="40">
	</div> <br>

	<div class="cor-prod">
		<label>Cor do produto</label>
		<input type="radio" id="AMARELO" name="cor_prod" value="AMARELO">
 	<label for="AMARELO">Amarelo</label>

  	<input type="radio" id="AZUL" name="cor_prod" value="AZUL">
  	<label for="AZUL">Azul</label>

  	<input type="radio" id="VERMELHO" name="cor_prod" value="VERMELHO">
  	<label for="VERMELHO">Vermelho</label>

  	<input type="radio" id="PRETO" name="cor_prod" value="PRETO">
  	<label for="PRETO">Preto</label>

	</div> <br>

	<div class="preco-prod">
		<label>Preço do produto</label>
		<input type="number" name="preco_prod" class="form-control" placeholder="Exemplo: 199.90" min="1" step="any" required>
	</div>
	<div class="dt-inclu-prod">
		<label>Data da inclusão do produto</label>
		<input type="date" name="dt_inclu_prod" class="form-control" required>
	</div>
	<div class="loj-prod">
		<label>Código da loja do produto</label>
		<input type="number" name="loj_prod" class="form-control" placeholder="Exemplo: 1 ou 2" maxlength="1" required>
	</div>
	<div class="botao-envio">
		<button type="submit">Cadastrar produto</button>
	</div>


</form>


</body>
</html>

-->