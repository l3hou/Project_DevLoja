<!-- página front end/client side para mostrar os produtos cadastrados e dar opção de edição e exclusão -->

<h1>Listar Produtos</h1>

<!-- inicio do código PHP -->

<?php
	$sql = "SELECT * FROM tb_produtos";
	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0) {
		print "<table>";print "<tr>";
			print "<th>Ações</th>";
			print "<th> Código do produto </th>";
			print "<th> Descrição do produto </th>";
			print "<th> Cor do produto </th>";
			print "<th> Preço do produto </th>";
			print "<th> Data inc. produto </th>";
			print "<th> Loja do produto </th>";
			print "</tr>";
		while($row = $res->fetch_object()) {	// configuração do botão para editar e excluir. precisa confirmar se quer excluir		
			print "<tr>";
			print "<td>
				<button onclick=\"location.href='?page=editar&cod_prod=".$row->cod_prod."';\" class='editar-bt'>Editar produto</button>							
				<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
					location.href='?page=salvar&acao=excluir&cod_prod=".$row->cod_prod."';
					}else{false;}\" class='excluir-bt'>Excluir produto</button>

			</td>";	

	// puxa dados do banco e apresenta em tela, com valor em formato de REAL (R$)
			$preco = $row->preco_prod;		
			print "<td>".$row->cod_prod;
			print "<td>".$row->desc_prod;
			print "<td>".$row->cor_prod;
			print "<td>"."R$ ";
			print number_format($preco, 2, ",",".");"<td>".$row->preco_prod;
			print "<td>".$row->dt_inclu_prod;
			print "<td>".$row->loj_prod;
			print "</tr>";
			


		}
		print "</table>";


	}else {
		print "<p class='alert alert-danger'>Não encontrou nenhum produto!</p>";

	}
?>

<!-- fim do código PHP -->

