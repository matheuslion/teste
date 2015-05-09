<?

@session_start();

include('conexao.php');


	$query = "select * from texto where descricao = 'atencao'";
	$resultado = mysql_query($query,$conexao);
	$busca = mysql_fetch_array($resultado);
	$titulo = $busca['titulo'];
	$texto = $busca['texto'];

?>
<html>
<body>
		<center><h2><? echo $titulo; ?> </h2></center>
		<font size="4"><? echo $texto; ?></font>
		
</body>
</html>
