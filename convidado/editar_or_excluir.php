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

$editar= $_POST['editar'];
$excluir= $_POST['excluir'];



//	echo '<pre>'; print_r($_POST); echo '</pre>';
//	exit;


if ( $excluir != NULL ){
	$sql= "delete from aluguel_produtos where aluguel_idaluguel = ".$excluir." ;";
	mysql_query($sql,$conexao);

	$sql2= "delete from aluguel where idaluguel = ".$excluir." ;";
	mysql_query($sql2,$conexao);	
	
	echo '<script type="text/javascript">alert("Aluguel eliminado do sistema!!!")</script>';
	echo "<script>location.href='relatorio_diario.php';</script>";
	
}

if ( $editar != NULL ){

$query_update = "update aluguel set status = 0;";
mysql_query($query_update,$conexao);

$sql_update= "update aluguel set status = 1 where idaluguel = ".$editar." ;";
mysql_query($sql_update,$conexao);

}

$sql = "SELECT idaluguel FROM `aluguel` WHERE status = 1  ";

	$consulta = mysql_db_query("thatyfestas",$sql);

	$id = mysql_fetch_array($consulta);
		
	$resposta=mysql_num_rows($consulta);
	
	if ( $resposta > 0 ){
	$sql2= "select nome_produto from produtos;";
	
	$resultado = mysql_query($sql2,$conexao);
?>	

<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 
 </head>

 <body>
   <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Editando Aluguel
			</big>
		</big>
	</big>
	</font>
	</center>
	<br>
	<br>
	<br>
	<br>
	<form id="cadastro" name="form1" method="post" action="select_produtos2.php" enctype="multipart/form-data" >
	
	<input name="id" type="hidden" id="id" value="<?php echo $id['idaluguel']; ?>" />
	
      <b>Produto:</b>
      <select name="produto" id="produto">
	  <?php
	  while ($linha = mysql_fetch_array($resultado)) {
      ?>
	  
	  <option value="<?php echo $linha['nome_produto']; ?>"><?php echo $linha['nome_produto']; ?></option>
	  
	  
	  <?php
	  }
	  ?>	   
      </select>
	  <b>Quantidade:</b><input name="qtde" type="text" id="qtde" size="10" maxlength="60" />

	  <input name="adc" type="image" src="images/add.png" id="adc" size="10" value="OK" />
	  <input name="prox" type="image" src="images/certo.png" id="prox" size="10" value="OK" />
	  
	</form>
<?php	
	$id_total= $id['idaluguel'];
	
	$sql_produtos= "SELECT produtos_nome_produto,qtde_solicitada from produtos,aluguel,aluguel_produtos where aluguel.idaluguel = aluguel_produtos.aluguel_idaluguel and produtos.nome_produto = aluguel_produtos.produtos_nome_produto and idaluguel = ".$id_total." ;";
	$lista_produtos= mysql_query($sql_produtos,$conexao);

	
	$sql3= "SELECT sum(produtos.valor_unitario*aluguel_produtos.qtde_solicitada) as total from produtos,aluguel,aluguel_produtos where aluguel.idaluguel = aluguel_produtos.aluguel_idaluguel and produtos.nome_produto = aluguel_produtos.produtos_nome_produto and idaluguel = ".$id_total." ;";
	$consulta = mysql_db_query("thatyfestas",$sql3);
	$total= mysql_fetch_array($consulta);	
	if ($total['total'] != NULL){
	
?>	
	<table width="600" border="0" rules="rows">

     <tr>
	 <td height="5"><b>Nome do Produto:</b></td>
	 <td><b>Quantidade:</b></td>
	 <td><b>Excluir:</b></td>

	 </tr>
	
	<?php
	
	while ($array= mysql_fetch_array($lista_produtos)){
	?>
	<form id="cadastro" name="form1" method="post" action="excluir_produto_aluguel.php" enctype="multipart/form-data" >
	 <tr>
	 
	 <input name="id" type="hidden" id="id" value="<?php echo $id_total ?>" />
	 
     <td><?php echo $array['produtos_nome_produto']; ?></td>

     <td><?php echo $array['qtde_solicitada']; ?></td>
     
     <td><input name="eliminar" src="images/excluir.gif" type="image" id="eliminar" size="10" value="<?php echo $array['produtos_nome_produto']; ?>" /></td>

    </tr>
	</form>
	<?php
	}
	?>
	
   </table>
   <br>
	<b>Total do aluguel:</b> <?php echo $total['total']; ?>

<?php
	}
}
?>	