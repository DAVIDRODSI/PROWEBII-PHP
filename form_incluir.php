<html lang="pt-br"> 
<meta http-equiv="Content-Type" content="text/html"
charset="utf-8"> 
<title> PHP com MySQL</title>
<body> <h3>Novo Produto</h3> 
<form name="produto" action="incluir.php" method="post"> 
<b>Código: </b> <input type="number" name="codigo"><br><br>
<b>Produto: </b><input type="text" name="produto" maxlength="80"
style="width:550px"><br><br>
 <b>Descrição: </b> <br><textarea
name="descricao" rows='3' cols '100' style="resize:
none;"></textarea><br><br> 
<b>Data: </b> <input type="date"
name="data"><br><br> 
<b>Imagem: </b> <input type="file" name="imagem"
maxlength="80" style="width:550px"><br><br> <b>valor: R$</b> <input
type="number" step="0.01" name="valor"><br><br> 
<input type="submit"name="Cadastrar">&nbsp;&nbsp; <button><a href="dadosdigitados.php">Lista de Produtos</a></button>

	</form>
</body>
</html>
