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


$select= $_POST['select'];


if ($select != 0){
////////////////////
$sql= "select idaluguel,nome,cpf,nome_produto,(qtde_solicitada-qtde_devolvida) as deve,
((qtde_solicitada-qtde_devolvida)*valor_reposicao) as total, date_format(data_devolucao,'%d/%m/%Y') as data_devolucao from 
cliente, aluguel,produtos,aluguel_produtos where cliente.cpf = aluguel.cliente_cpf and 
aluguel.idaluguel = aluguel_produtos.aluguel_idaluguel and aluguel_produtos.produtos_nome_produto = 
produtos.nome_produto and ((qtde_solicitada-qtde_devolvida)>0) and cpf = '".$select."' ;";
$resultado = mysql_query($sql,$conexao);

}else{
$sql= "select idaluguel,nome,cpf,nome_produto,(qtde_solicitada-qtde_devolvida) as deve, date_format(data_devolucao,'%d/%m/%Y') as data_devolucao from 
cliente, aluguel,produtos,aluguel_produtos where cliente.cpf = aluguel.cliente_cpf and 
aluguel.idaluguel = aluguel_produtos.aluguel_idaluguel and aluguel_produtos.produtos_nome_produto = 
produtos.nome_produto and ((qtde_solicitada-qtde_devolvida)>0) group by nome;";
$resultado = mysql_query($sql,$conexao);
$select="NULL";
}

$resultado = mysql_query($sql,$conexao);

$rows= mysql_num_rows($resultado);

if ( $rows > 0 ){
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
				Debitos
			</big>
		</big>
	</big>
	</font>
	</center>
	<br>
	<br>
	
	<center>

	<br><br>
	<table width="800" border="0" rules="groups">

	
     <tr>
	 <td><b>ID:</b></td>
	 <td><b>Nome:</b></td>
	 <td><b>CPF:</b></td>
	 <td><b>Produto:</b></td>
	 <td><b>Quantidade:</b></td>
	 <td><b>Data Devolucao:</b></td>
	 <td><b>Total (R$):</b></td>
	 <td><b>Selecionar:</b></td>
	 </tr>
	
	<?php
	
	while ($linha= mysql_fetch_array($resultado)){
	?>
	<form id="cadastro" name="form1" method="post" action="cliente_deve.php" enctype="multipart/form-data" >
	 <tr>
	 
	 <td><?php echo $linha['idaluguel']; ?></td>
	 
     <td><?php echo $linha['nome']; ?></td>

     <td><?php echo $linha['cpf']; ?></td>
	 
     <td><?php echo $linha['nome_produto']; ?></td>
	 
	 <td><?php echo $linha['deve']; ?></td>
	 
	 <td><?php echo $linha['data_devolucao']; ?></td>

	 <td><b><font color="red"><?php echo $linha['total']; ?></font></b></td>
	 
     <td><input name="select" src="images/certo.png" type="image" id="select" size="10" value="<?php echo $linha['cpf']; ?>" /></td>

    </tr>
	</form>
	
	<?php
	}
	?>
	</table>
	<br>
	<td><b>VOLTAR</b><input type="image" src="images/voltar.gif" id="voltar"  target="main" OnClick="parent.location.href='pag_cliente_deve.php'"></td>
	</center>
	<?php
	}
	else{
	?>
	<center><h2>Nenhum debito!</h2></center>
	
	<?php
	}
	?>

 </body>
</html>