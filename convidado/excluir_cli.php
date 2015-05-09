<?php

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

$cpf = $_POST ["cpf"];

$sql= "select cpf from cliente where cpf = '".$cpf."' ";
$resultado = mysql_query($sql,$conexao);
$num_rows = mysql_num_rows($resultado);

$sql_cliente="select * from aluguel,cliente,aluguel_produtos 
where cliente.cpf=aluguel.cliente_cpf and aluguel.idaluguel = aluguel_produtos.aluguel_idaluguel
 and qtde_devolvida = 0;";
$resultado_cliente = mysql_query($sql_cliente,$conexao);
$num_rows_cliente = mysql_num_rows($resultado_cliente);

if ( $num_rows > 0){
    if(!$num_rows_cliente){
		$sql2= "delete from cliente where cpf = '".$cpf."' ";
		$resultado2 = mysql_query($sql2,$conexao);
		echo '<script type="text/javascript">alert("Cliente excluido!")</script>';
		echo "<script>location.href='excluir_cliente.html';</script>";
	}
	else{
		echo '<script type="text/javascript">alert("Existe pendencias para esse cliente!")</script>';
		echo "<script>location.href='excluir_cliente.html';</script>";	
	}
}
else{
	echo '<script type="text/javascript">alert("Nao existe nenhum cliente com esse CPF!!!")</script>';
	echo "<script>location.href='excluir_cliente.html';</script>";	
}
