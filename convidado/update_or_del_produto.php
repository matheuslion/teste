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


$nome = $_POST ["nome"];
$qtde= $_POST ["qtde"];
$desc= $_POST ["desc"];
$valor_uni= $_POST ["valor_uni"];
$valor_repo= $_POST ["valor_repo"];
$tipo= $_POST ["tipo"];

$alterar= $_POST ["alterar"];
$excluir= $_POST ["excluir"];

if ($alterar != NULL){
	$sql1 = "update produtos set qtde_disponivel = ".$qtde." WHERE nome_produto = '".$nome."'  ";
	$sql2 = "update produtos set descricao = '".$desc."' WHERE nome_produto = '".$nome."'  ";
	$sql3 = "update produtos set valor_unitario = ".$valor_uni." WHERE nome_produto = '".$nome."'  ";
	$sql4 = "update produtos set valor_reposicao = ".$valor_repo." WHERE nome_produto = '".$nome."'  ";
	$sql5 = "update produtos set tipo = ".$tipo." WHERE nome_produto = '".$nome."'  ";
	mysql_query($sql1,$conexao);
	mysql_query($sql2,$conexao);
	mysql_query($sql3,$conexao);
	mysql_query($sql4,$conexao);
	mysql_query($sql5,$conexao);
	echo '<script type="text/javascript">alert("Produto altualizado com sucesso!!!")</script>';
	echo "<script>location.href='alterar_produto.php';</script>";
}
if ($excluir != NULL ){
	$sql = "SELECT * FROM `aluguel_produtos` WHERE produtos_nome_produto = '".$nome."' and qtde_devolvida = 0  ;";
	$consulta= mysql_query($sql,$conexao);
	$resultado= mysql_num_rows($consulta);
	if ($resultado <= 0){	
		$sql1 = "delete from produtos WHERE nome_produto = '".$nome."'  ";
		mysql_query($sql1,$conexao);
		echo '<script type="text/javascript">alert("Produto excluido com sucesso!!!")</script>';
		echo "<script>location.href='alterar_produto.php';</script>";
	}
	else{
		echo '<script type="text/javascript">alert("Existem alugueis em aberto com esse produto!!!")</script>';
		echo "<script>location.href='alterar_produto.php';</script>";	
	}
}


?>
