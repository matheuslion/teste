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

$sql = "SELECT nome,cpf FROM `cliente` order by nome";

	$consulta = mysql_db_query("thatyfestas",$sql);
		
	$resposta=mysql_num_rows($consulta);
	
	if ( $resposta > 0 ){

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
				Selecione o cliente
			</big>
		</big>
	</big>
	</font>
	</center>
	<br>
	<br>

	<center>
	<table width="700" border="0" rules="groups">

     <tr>
	 <td height="5"><b>Nome:</b></td>
	 <td><b>CPF:</b></td>
	 <td><b>Selecionar:</b></td>

	 </tr>
	
	<?php
	
	while ($linha= mysql_fetch_array($consulta)){
	?>
	<form id="cadastro" name="form1" method="post" action="aluga_produto.php" enctype="multipart/form-data" >
	 <tr>
	 
     <td><?php echo $linha['nome']; ?></td>

     <td><?php echo $linha['cpf']; ?></td>
     
     <td><input name="select" src="images/certo.png" type="image" id="select" size="10" value="<?php echo $linha['cpf']; ?>" /></td>

    </tr>
	</form>
	
	<?php
	}
	?>
	</table>
	</center>
	</body>
	</html>
<?php
}
?>	
	