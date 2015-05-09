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

$id= $_POST['id'];

$sql= "SELECT produtos_nome_produto,qtde_solicitada,qtde_devolvida from
 produtos,aluguel,aluguel_produtos where aluguel.idaluguel = 
 aluguel_produtos.aluguel_idaluguel and produtos.nome_produto = 
 aluguel_produtos.produtos_nome_produto and idaluguel = ".$id.";";

$resultado = mysql_query($sql,$conexao);

$rows=mysql_num_rows($resultado);

if ($rows > 0){

?>
<html>
<body>
   <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Devolucoes
			</big>
		</big>
	</big>
	</font>
   </center>
   <br>
	<center>
    <table width="700" border="1" rules="rows" >	
    
	 <tr>
	 <td height="5"><b>Mercadoria</b></td>
	 <td><b>Quantidade Solicitada</b></td>
	 <td><b>Quantidade Devolvida</b></td>
	 <td><b>Atualizar</b></td>
	 </tr>
	 
	<form id="cadastro" name="form1" method="post" action="set_devolucao.php" enctype="multipart/form-data" >

 	<b>TODOS PRODUTOS FORAM DEVOLVIDOS CORRETAMENTE</b> <input name="alterar" src="images/certo.png" type="image" id="alterar" size="10" value="<?php echo $id ?>" />
	<br>
	<?php
	$i=1;
	while ($linha = mysql_fetch_array($resultado)){
	?>
	 <tr>

     <td><?php echo $linha['produtos_nome_produto']; ?> <input name="produto<?php echo $i?>" type="hidden" value="<?php echo $linha['produtos_nome_produto']; ?>" /></td>
	 
     <td><?php echo $linha['qtde_solicitada']; ?> <input name="qtde_solicitada<?php echo $i?>" type="hidden" value="<?php echo $linha['qtde_solicitada']; ?>" /> 
	 
	 <input name="i" type="hidden" value="<?php echo $i ?>" /></td>
     
     <td><input name="qtde_devolvida<?php echo $i?>" value="<?php echo $linha['qtde_devolvida']; ?>" type="text" size="6" maxlength="100" /></td>
	 
	<td><input name="id_dev" src="images/certo.png" type="image" size="10" value="<?php echo $id ?>" /></td>	 
	
    </tr>
	<?php
	$i++;
	}
	}else{
	echo '<script type="text/javascript">alert("ID invalido!!!")</script>';
	echo "<script>location.href='devolucao.html';</script>";
	}
	?>
	</form>
	</table>
	</center>

</body>
</html>
 