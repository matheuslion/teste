<?php


include('conexao.php');

$sql= "SELECT idcliente,nome FROM `cliente`";

$resultado = mysql_query($sql,$conexao);

?>
   <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Pesquisar Paciente
			</big>
		</big>
	</big>
	</font>
   </center>
   <br>
   
	<form id="cadastro" name="form1" method="post" action="lista_prontuarios.php" enctype="multipart/form-data" >
      <b>Paciente:</b>
      
      <select name="id" id="id">
	  <?php
	  while ($linha = mysql_fetch_array($resultado)) {
      ?>
	  
	  <option value="<?php echo $linha['idcliente']; ?>"><?php echo $linha['nome']; ?></option>
	  
	  <?php
	  }
	  ?>	   
      </select>
      <input name="cadastrar" type="submit" id="cadastrar" value="Pesquisar" />
      
      <br>
      <br>
      

	  </form>
	  

	<form id="cadastro" name="form1" method="post" action="lista_prontuarios.php" enctype="multipart/form-data" >
	  
	  <b>ID Paciente:</b><input name="id" type="text" id="id" />
      
	  <input name="cadastrar" type="submit" id="cadastrar" value="Pesquisar" />
    
	  </form>
	  	  
	  
	  

	  <br>
<center><img onclick="history.back();" src="images/voltar.gif"/></center>

	
