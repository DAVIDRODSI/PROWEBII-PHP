	<?php
	include_once('conexao.php');

$codigo = $_POST['codigo'];

$produto = $_POST['produto'];

$descricao = $_POST['descricao'];

$imagem = $_POST['imagem'];

$data = $_POST['data'];

$valor = $_POST['valor'];

echo "O dados incluídos são Codígo: $codigo , Produto: $produto , Descrição: $descricao , Imagem: $imagem , Data: $data e Valor $valor.";