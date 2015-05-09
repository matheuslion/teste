<html>
 <head>
 
<?

include('menu.html');

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 



 </head>
 <body background="images/fundo.png">
   <center>
    <font color="navy" size='3'>
    <big>
		<big>
			<big>
				Cadastro de Textos
				</font>
			</big>
		</big>
	</big>
	</font>
	
   </center>


   
<br><br>
   
   <form method="post" action="update_texto.php" enctype="multipart/form-data" >
    <table width="770" border="0">

     <tr>
      <td width="69"><b>Titulo:</b></td>
      <td width="546"><input name="titulo" type="text" id="titulo" size="30" maxlength="60" /></td>
	  
    </tr>
	
    <tr>
     <td><b>Texto:</b></td>
     <td><TEXTAREA COLS=50 ROWS=10 name="texto"></TEXTAREA>
    </tr>
    
    
      <tr>
      <td width="69"><b>Descrição:</b></td>
		<td>
		<select name="descricao"> 
		  <option value="aparencia">Aparência</option>
		  <option value="atitude">Atitude</option>
		  <option value="consciencia">Consciência</option>
		  <option value="orientacao">Orientação</option>
			<option value="atencao">Atenção</option>
		  <option value="memoria">Memória</option>
		  <option value="senso">Senso-Percepção</option>
		  <option value="pensamento">Pensamento</option>
			<option value="linguagem">Linguagem</option>
		  <option value="inteligencia">inteligência</option>
		  <option value="conciencia_doeu">Consciência do eu</option>
		  <option value="humor">Humor</option>
			<option value="afeto">Afeto</option>
		  <option value="volicao">Volição</option>
		  <option value="psicomotricidade">Psicomotricidade</option>
		  <option value="insight">Insight</option>
			<option value="contratrasnferencia">Contratrasnferência</option>
			<option value="cid">Cid</option>
			<option value="dsm">Dsm</option>	
		</select>
		</td>
		</tr>
 	
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Enviar" /> 
		</td>
    </tr>
	
	</table>
  </form>
  
  
	<br>
	<br>
	
	
	<form name="teste" method="post" action="update_texto.php" enctype="multipart/form-data">

			<tr>
      <td width="69"><b>Descrição:</b></td>
		<td>
		<select name="descricao"> 
		  <option value="aparencia">Aparência</option>
		  <option value="atitude">Atitude</option>
		  <option value="consciencia">Consciência</option>
		  <option value="orientacao">Orientação</option>
			<option value="atencao">Atenção</option>
		  <option value="memoria">Memória</option>
		  <option value="senso">Senso-Percepção</option>
		  <option value="pensamento">Pensamento</option>
			<option value="linguagem">Linguagem</option>
		  <option value="inteligencia">inteligência</option>
		  <option value="conciencia_doeu">Consciência do eu</option>
		  <option value="humor">Humor</option>
			<option value="afeto">Afeto</option>
		  <option value="volicao">Volição</option>
		  <option value="psicomotricidade">Psicomotricidade</option>
		  <option value="insight">Insight</option>
			<option value="contratrasnferencia">Contratrasnferência</option>
			<option value="cid">Cid</option>
			<option value="dsm">Dsm</option>	
		</select>
		</td>
		</tr>
		
		<tr>
		 <td>	
			<label> Arquivo PDF:</label>
		 </td>
		 <td>
		   <input type="file" name="pdf" id="pdf" /><br /><br />
		 </td>
		<tr>
		
		<tr>
		 <td>
			 <input type="submit" name="envia" value="Enviar" />
		 </td>
		<tr>

	</form>
	
	
	

	
	
	


 </body>
</html>
