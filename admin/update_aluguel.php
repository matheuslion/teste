<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$conexao = mysql_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost é onde esta o banco de dados.

if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysql_select_db("thatyfestas",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais

if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$hora= $_POST['hourcombo'];
$min= $_POST['mincombo']; 
$seg= $_POST['seccombo']; 
$tipo= $_POST['tipo'];
$entrada= $_POST['entrada'];
$entrega= $_POST['entrega'];
$desconto= $_POST['desconto'];


$sql = "SELECT idaluguel FROM `aluguel` WHERE tipo_pagamento = 'NULL'  ";

	$consulta = mysql_db_query("thatyfestas",$sql);

	$sql_id = mysql_fetch_array($consulta);
	
	$id= $sql_id['idaluguel'];
	
if(IsSet($_SESSION['nome_usuario'])){
	$fk_usuario= $_SESSION['nome_usuario'];
	$sql_nome = "select nome_user from usuario where login = '$fk_usuario'  ;";
	$consulta= mysql_query($sql_nome,$conexao);
	$resultado= mysql_fetch_array($consulta);
	$nome_user= $resultado['nome_user'];
}
else{
	$nome_user= "Não Identificado";
}

$sql1 = "update aluguel set tipo_pagamento = '".$tipo."' WHERE idaluguel = '$id'  ";
$sql2 = "update aluguel set entrega = '".$entrega."' WHERE idaluguel = '$id'  ";
$sql3 = "update aluguel set entrada = '".$entrada."' WHERE idaluguel = '$id'  ";
$sql4 = "update aluguel set horario = '$hora:$min' WHERE idaluguel = '$id'  ";
$sql5 = "update aluguel set atendente = '$nome_user' WHERE idaluguel = '$id'  ";
$sql6 = "update aluguel set desconto = '$desconto' WHERE idaluguel = '$id'  ";

mysql_query($sql1,$conexao);
mysql_query($sql2,$conexao);
mysql_query($sql3,$conexao);
mysql_query($sql4,$conexao);
mysql_query($sql5,$conexao);
mysql_query($sql6,$conexao);

	echo "<script>location.href='lista_aluguel.php';</script>";


?>