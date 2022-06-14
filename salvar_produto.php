<!-- página server side para salvar os produtos cadastrados, editados e excluidos em banco -->


<!-- inicio do código PHP -->
<?php

//cadastro de produto

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
		$cod_prod = $_POST["cod_prod"];
		$desc_prod = $_POST["desc_prod"];
		$cor_prod = $_POST["cor_prod"];
		$preco_prod = $_POST["preco_prod"];
		$dt_inclu_prod = $_POST["dt_inclu_prod"];
		$loj_prod = $_POST["loj_prod"];

		$sql = "INSERT INTO tb_produtos (cod_prod, desc_prod, cor_prod, preco_prod, dt_inclu_prod, loj_prod) VALUES ('{$cod_prod}', '{$desc_prod}', '{$cor_prod}', '{$preco_prod}', '{$dt_inclu_prod}', '{$loj_prod}')";

		$res = $conn->query($sql);

		if($res==true) {
			print "<script>alert('Cadastrado com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		} else {
			print "<script>alert('Não foi possivel cadastrar');</script>";
			print "<script>location.href='?page=listar';</script>";

		}

		break;
//editar produto

		case 'editar':
		$cod_prod = $_POST["cod_prod"];
		$desc_prod = $_POST["desc_prod"];
		$cor_prod = $_POST["cor_prod"];
		$preco_prod = $_POST["preco_prod"];
		$dt_inclu_prod = $_POST["dt_inclu_prod"];
		$loj_prod = $_POST["loj_prod"];

		$sql = "UPDATE tb_produtos SET 
			cod_prod='{$cod_prod}',
			desc_prod='{$desc_prod}',
			cor_prod='{$cor_prod}',
			preco_prod='{$preco_prod}',
			dt_inclu_prod='{$dt_inclu_prod}',
			loj_prod='{$loj_prod}'
			WHERE 
			cod_prod=".$_REQUEST["cod_prod"];	

			$res = $conn->query($sql);

			if($res==true) {
			print "<script>alert('Editado com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		} else {
			print "<script>alert('Não foi possivel editar');</script>";
			print "<script>location.href='?page=listar';</script>";

		}


		break;

//excluir produto

		case 'excluir':

			$sql = "DELETE FROM tb_produtos WHERE cod_prod =".$_REQUEST["cod_prod"];

			$res = $conn->query($sql);

		if($res==true) {
			print "<script>alert('Excluido com sucesso');</script>";
			print "<script>location.href='?page=listar';</script>";
		} else {
			print "<script>alert('Não foi possivel excluir');</script>";
			print "<script>location.href='?page=listar';</script>";

		}


		break;
	}

 ?>

 <!-- fim do código PHP -->