<?php
//COMO JÁ EXISTE, MENCIONO O CÓDIGO
include_once('conexao.php');

$codigo = $_POST['codigo'];

$produto = $_POST['produto'];

$descricao = $_POST['descricao'];

$imagem = $_POST['imagem'];

$data = $_POST['data'];

$valor = $_POST['valor'];
//LINHA DE CÓDIGOS QUE FARÁ A INCLUSÃO DOS DADOS NA TABELA
//COMANDO DE INSERÇÃO - VALUES SÃO AS VARIÁVEIS
$sqlinsert = "insert into tabela (codigo, produto, descricao, data, imagem, valor)
values ('$codigo' , '$produto' , '$descricao' , '$data' , '$imagem' , '$valor' )";
// EXECUTA E EFETUA A GRAVAÇÃO
$resultado = mysqli_query($conexao, $sqlinsert);
if (!$resultado) 
//CASO HAJA ALGUM ERRO
{
	die ('Query inválida: '.mysql_error($conexao));
}
//CASO O DADO SEJA GRAVADO
else 
{ 
echo"Registro cadastrado com Sucesso";
}
mysql_close($conexao);
//PARA RETORNAR
<br><br>
<input type='button' onclick="window.location='form_incluir.php';" value="Voltar">
?>