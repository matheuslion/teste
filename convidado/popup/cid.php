<?php

@session_start();

include('conexao.php');


	$query = "select * from texto where descricao = 'cid'";
	$resultado = mysql_query($query,$conexao);
	$busca = mysql_fetch_array($resultado);
	$titulo = $busca['titulo'];
	$texto = $busca['texto'];
	if($busca['pdf'] == 1){
		echo "<script>location.href='../pdfs/cid.pdf';</script>";
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
		<center><h2><?php echo $titulo; ?> </h2></center>
		<font size="4"><?php echo $texto; ?></font>
		
</body>
</html>
