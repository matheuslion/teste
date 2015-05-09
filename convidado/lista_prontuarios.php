 <?php

include('conexao.php');


// clients

$id = $_POST['id'];

if ($id == null){

	$sql= "SELECT *, date_format(data_nasc,'%d/%m/%Y') as data_nasc FROM cliente;";
}
else{
	$sql= "SELECT *, date_format(data_nasc,'%d/%m/%Y') as data_nasc FROM cliente where idcliente = ".$id."; ";
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
				Pacientes Cadastrados
			</big>
		</big>
	</big>
	</font>
	</center>
	<br>
	<br>
	
	<center>

	<big>Total de prontuarios : <font color="blue"> <?php echo $rows; ?></font></big>
	<br><br>
	<table width="750" border="0" rules="groups">

     <tr>
     <td height="5"><b>ID:</b></td>
	 <td height="5"><b>Nome:</b></td>
	 <td><b>RG:</b></td>
	 <td><b>Data Nasc.:</b></td>
	 <td><b>Telefone:</b></td>
	  <td><b>Celular:</b></td>
	 <td><b>Visualizar:</b></td>
	 </tr>
	
	<?php
	
	while ($linha= mysql_fetch_array($resultado)){
	?>
	<form id="cadastro" name="form1" method="post" action="dados_cliente.php"  >
	 <tr>
	 
	 <td><?php echo $linha['idcliente']; ?></td>
	 
     <td><?php echo $linha['nome']; ?></td>

     <td><?php echo $linha['rg']; ?></td>

	 <td><?php echo $linha['data_nasc']; ?></td>
	 
	  <td><?php echo $linha['tel']; ?></td>

	 <td><?php echo $linha['cel']; ?></td>
	 
    
     <td><input name="id_2" src="images/certo.png" type="image" id="id" size="10" value="<?php echo $linha['idcliente']; ?>" /></td>

    </tr>
	</form>
	
	<?php
	}
	?>
	</table>
	</center>
	<?php
	}
	else{
	?>
	<center><big>Nenhum prontuario encontrado!</big></center>
	
	<?php
	}
	?>
	<br>
	<center><img onclick="history.back();" src="images/voltar.gif"/></center>
 </body>
</html>


