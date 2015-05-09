 <?php

include('conexao.php');

$cliente = $_POST ["cliente"];

$sql= "SELECT *,DATE_FORMAT(data_nasc, '%d/%m/%Y') as data_nasc FROM `cliente` WHERE idcliente = ".$cliente." ";

$resultado = mysql_query($sql,$conexao);

$num_rows= mysql_num_rows($resultado);

?>
<html>
 <body>
    <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Pesquisar Clientes
			</big>
		</big>
	</big>
	</font>
   </center>
   <br>
   
    <center>

	<table width="700" frame="box" rules="void" >  
	  <?php
	  while ($linha = mysql_fetch_array($resultado)) {
      ?>
  	<tr>
      <td><br><font color="navy"> <big> Dados Pessoais </big> </font><br></td>
    </tr>

			<tr>
			  <td width="69"><b>Nome:</b></td>
			  <td width="546"><?php echo $linha['nome']; ?>
				</td>
			</tr>
	
			 <tr>
			  <td><b>Sexo:</b></td>
				 <td><?php echo $linha['sexo']; ?>
				</td>
			</tr>	
			
			 <tr>
			  <td><b>CPF:</b></td>
				 <td><?php echo $linha['cpf']; ?>
				</td>
			</tr>
			
			 <tr>
			  <td><b>RG:</b></td>
				 <td><?php echo $linha['rg']; ?>
				</td>
			</tr>
			
			 <tr>
			  <td><b>Data de Nascimento:</b></td>
				 <td><?php echo $linha['data_nasc']; ?>
				</td>
			</tr>
			
	<tr>
      <td colspan="1"><br><font color="navy"> <big> Contato </big> </font><br></td>
    </tr>
				
			 <tr>
			  <td><b>Endere&ccedil;o:</b></td>
				 <td> <?php echo $linha['rua']; ?>
				</td>
			</tr>
			
			 <tr>
			  <td><b>Numero:</b></td>
				 <td> <?php echo $linha['numero_moradia']; ?>
				</td>
			</tr>	
			
			 <tr>
			  <td><b>Bairro:</b></td>
				 <td><?php echo $linha['bairro']; ?>
				</td>
			</tr>
					

			 <tr>
			  <td><b>Telefone:</b></td>
				 <td> <?php echo $linha['tel']; ?>
				</td>
			</tr>	
			
			 <tr>
			  <td><b>Celular:</b></td>
				 <td> <?php echo $linha['cel']; ?>
				</td>
			</tr>			
	  <?php
	  }
	  ?>			
		
   </table>
   </center>
  </body>
</html>
