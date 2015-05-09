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

$sql= "SELECT login FROM `usuario`";

$resultado = mysql_query($sql,$conexao);

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
				Excluir Usuarios
			</big>
		</big>
	</big>
	</font>
   </center>
   <br>
   <form id="cadastro" name="form1" method="post" action="excluir_usuario.php" enctype="multipart/form-data" >
    <table width="720" border="0">

<tr>
      <td><b>Login:</b></td>
      <td><select name="login" id="login">
	  <?php
	  while ($linha = mysql_fetch_array($resultado)) {
      ?>
	  
	  <option value="<?php echo $linha['login']; ?>"><?php echo $linha['login']; ?></option>
	  
	  
	  <?php
	  }
	  ?>
      </select>
     </td>
    </tr>
 
    <tr>
     <td><b>Senha:</b></td>
     <td><input name="senha" type="text" id="senha" size="30" maxlength="70" /><font color="red">*</font></td>
    </tr>

    <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Excluir !" /> 
		</td>
    </tr>
	

   </table>
  </form>
 </body>
</html>
