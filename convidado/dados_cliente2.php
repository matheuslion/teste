<?php

include('conexao.php');

//	echo '<pre>'; print_r($_POST); echo '</pre>';
//	exit;

@ $idcliente1 = $_POST['id_1'];

@ $idcliente2 = $_POST['id_2'];

if($idcliente1 != null){

	include('menu.html');

$sql= "SELECT *,date_format(data_nasc,'%d/%m/%Y') as data_nasc from cliente where idcliente = ".$idcliente1."; ";

$resultado = mysql_query($sql,$conexao);

if ($resultado) 
	$rows=mysql_num_rows($resultado);

if ($rows <= 0){
	echo '<script type="text/javascript">alert("Nao encontramos nenhum registro!")</script>';
	echo "<script>location.href='index.php';</script>";
}
else{
	$linha = mysql_fetch_array($resultado);
}
?>

<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 
 </head>

<body background="images/fundo.png">
 
   <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Anamnese
			</big>
		</big>
	</big>
	</font>
	
   </center>

   <font color="navy">
    <big>
		<big>
			Dados Pessoais
		</big>
	</big>		
   </font>
   

   
   <form id="cadastro" name="form1" method="post" action="update_cadastro2.php" enctype="multipart/form-data" >
    <table width="770" border="0">

     <tr>
      <td width="69"><b>Nome:</b></td>
      <td width="546"><input name="nome" type="text" id="nome" size="30" maxlength="60" value=<?php echo $linha['nome']; ?> /></td>
	  
    </tr>
	<tr>
     <td><b>Data Nasc.:</b></td>
     <td><input name="data_nasc" type="text" id="data_nasc" size="30" maxlength="60" value=<?php echo $linha['data_nasc']; ?> /></td>
    </tr>

    <tr>
     <td><b>Filia&ccedil;&atilde;o:</b></td>
    
    
     <td>
     <b>Mãe:</b>
     <input name="mae" type="text" id="mae" size="9" maxlength="70" value=<?php echo $linha['mae']; ?> />
    
   
     <b>Pai:</b>
	 <input name="pai" type="text" id="pai" size="9" maxlength="70" value=<?php echo $linha['pai']; ?> />
	 </td>

    </tr>
    
 
    <tr>
     <td><b>Identidade:</b></td>
     <td>
     <input name="rg" type="text" id="rg" size="15" maxlength="60" value=<?php echo $linha['rg']; ?> />

     <b>Exp.:</b>
     <input name="exp" type="text" id="exp" size="7" maxlength="60" value=<?php echo $linha['exp']; ?> /></td>
	</tr>

    <tr>
     <td><b>Sexo:</b></td>
     <td><input name="sexo" type="text" id="sexo" size="30" maxlength="70" value=<?php echo $linha['sexo']; ?> /></td>
    </tr>
     
    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    <tr>
     <td><b>Etnia:</b></td>
     <td><input name="etnia" type="text" id="etnia" size="30" maxlength="70" value=<?php echo $linha['etnia']; ?> /></td>
    </tr>

    <tr>
     <td><b>Estado Civil:</b></td>
     <td><input name="estado_civil" type="text" id="estado_civil" size="30" maxlength="70" value=<?php echo $linha['estado_civil']; ?> /></td>
    </tr>

    <tr>
     <td>
     <br>
     </td>
    </tr>
    

    <tr>
     <td><b>Profissão Atual:</b></td>
     <td><input name="proff_atual" type="text" id="proff_atual" size="30" maxlength="70" value=<?php echo $linha['proff_atual']; ?> /></td>
    </tr>


    <tr>
     <td><b>Profissão Anterior:</b></td>
     <td><input name="proff_anterior" type="text" id="proff_anterior" size="30" maxlength="70" value=<?php echo $linha['proff_anterior']; ?> /></td>
    </tr>
    
    
    <tr>
     <td>
     <br>
     </td>
    </tr>     
     
    <tr>
     <td><b>Endere&ccedil;o Residencial:</b></td>
     <td><input name="endereco_res" type="text" id="endereco_res" size="30" maxlength="70" value=<?php echo $linha['endereco_res']; ?> /></td>
    </tr>
	
	<tr>
     <td><b>Numero:</b></td>
     <td><input name="n_res" type="text" id="n_res" size="10" maxlength="60" value=<?php echo $linha['n_res']; ?> /></td>
    </tr>
	
    <tr>
     <td><b>Bairro:</b></td>
     <td><input name="bairro_res" type="text" id="bairro_res" size="30" maxlength="60" value=<?php echo $linha['bairro_res']; ?> /></td>
    </tr>



    <tr>
     <td>
     <br>
     </td>
    </tr>

    <tr>
     <td><b>Endere&ccedil;o Profissional</b></td>
     <td><input name="endereco_pro" type="text" id="endereco_pro" size="30" maxlength="70" value=<?php echo $linha['endereco_pro']; ?> /></td>
    </tr>
	
	<tr>
     <td><b>Numero:</b></td>
     <td><input name="n_pro" type="text" id="n_pro" size="10" maxlength="60" value=<?php echo $linha['n_pro']; ?> /></td>
    </tr>
	
    <tr>
     <td><b>Bairro:</b></td>
     <td><input name="bairro_pro" type="text" id="bairro_pro" size="30" maxlength="60" value=<?php echo $linha['bairro_pro']; ?> /></td>
    </tr>

    <tr>
     <td>
     <br>
     </td>
    </tr>

    <tr>
     <td><b>Telefone Residencial:</b></td>
     <td><input type="text" name="tel" maxlength="100" value="<?php echo $linha['tel']; ?>" />
    </tr>
	
    <tr>
     <td><b>Telefone Profissional:</b></td>
     <td><input type="text" name="tel_pro" maxlength="100" value="<?php echo $linha['tel_pro']; ?>" />
    </tr>
    
    <tr>
     <td><b>Celular:</b></td>
     <td><input name="cel" type="text" id="cel" maxlength="100" value="<?php echo $linha['cel']; ?>" /></td>
    </tr>
	
    <tr>
     <td><b>Contato ou responsável:</b></td>
     <td><input name="contato" type="text" id="contato" size="30" maxlength="60" value=<?php echo $linha['contato']; ?> /></td>
    </tr>
   


    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
				Procura do serviço
			</big>
		</big>		
	   </font>
	</td>
    </tr>


    

    <tr>
     <td><b>Demanda de:</b></td>
     <td><input name="demanda" type="text" id="demanda" size="30" maxlength="60" value=<?php echo $linha['demanda']; ?> /></td>
    </tr>
    
    <tr>
     <td><b>Indicado por:</b></td>
     <td><input name="indicado" type="text" id="indicado" size="30" maxlength="60" value=<?php echo $linha['indicado']; ?> /></td>
    </tr>
	

    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    
    <tr>
     <td><b>Queixa principal:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="queixa"><?php echo $linha['queixa']; ?></TEXTAREA>
    </tr>

    <tr>
     <td><b>História da doença atual:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="hist_doenca"><?php echo $linha['hist_doenca']; ?></TEXTAREA></td>
    </tr>

    <tr>
     <td><b>Internações hospitalares:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="inter_hosp"><?php echo $linha['inter_hosp']; ?></TEXTAREA></td>
    </tr>    
    
    <tr>
     <td><b>História familial:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="hist_familia"><?php echo $linha['hist_familia']; ?></TEXTAREA></td>
    </tr>    

    <tr>
     <td><b>História pessoal e social:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="hist_pessoal"><?php echo $linha['hist_pessoal']; ?></TEXTAREA></td>
    </tr>    

    <tr>
     <td><b>História escolar:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="hist_escolar"><?php echo $linha['hist_escolar']; ?></TEXTAREA></td>
    </tr>    

    <tr>
     <td><b>História ocupacional:</b></td>
    <td><TEXTAREA COLS=30 ROWS=3 name="hist_ocu"><?php echo $linha['hist_ocu']; ?></TEXTAREA></td>
    </tr>    

    <tr>
     <td><b>Hábitos de vida:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="habitos"><?php echo $linha['habitos']; ?></TEXTAREA></td>
    </tr>    

    <tr>
     <td><b>Revisão dos sistemas:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="revisao"><?php echo $linha['revisao']; ?></TEXTAREA></td>
    </tr>
      
     <tr>
		 <td> 
		   <font color="navy">
			<big>
				<big>
					Exame físico
				</big>
			</big>		
		   </font>
		</td>
	</tr>
	
	
    <tr>
     <td><b>Ectoscopia:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="ecto"><?php echo $linha['ecto']; ?></TEXTAREA></td>
    </tr>
    
    <tr>
     <td><b>Exame sistêmico:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="exame_sis"><?php echo $linha['exame_sis']; ?></TEXTAREA></td>
    </tr>
    
    <tr>
     <td><b>Exame neurológico:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="exame_neu"><?php echo $linha['exame_neu']; ?></TEXTAREA></td>
    </tr>
    
        
    <tr> 
     <td>
     <br>
     </td>
    </tr>
    <tr>

    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
				Exame psíquico
			</big>
		</big>		
	   </font>
	</td>
    </tr>

    <tr>
     <td>
	
	<script languague="javascript">
	function popup_aparencia(){
	window.open('popup/aparencia.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_aparencia" onclick="popup_aparencia()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Aparência:</b>

      </td>
     <td><TEXTAREA COLS=30 ROWS=3 name="aparencia"><?php echo $linha['aparencia']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_atitude(){
	window.open('popup/atitude.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_atitude" onclick="popup_atitude()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Atitude:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="atitude"><?php echo $linha['atitude']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_consciencia(){
	window.open('popup/consciencia.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_consciencia" onclick="popup_consciencia()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Consciência:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="consciencia"><?php echo $linha['consciencia']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_orientacao(){
	window.open('popup/orientacao.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_orientacao" onclick="popup_orientacao()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Orientação:</b>

      </td>


     <td><TEXTAREA COLS=30 ROWS=3 name="orientacao"><?php echo $linha['orientacao']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_atencao(){
	window.open('popup/atencao.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_atencao" onclick="popup_atencao()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Atenção:</b>

      </td>


     <td><TEXTAREA COLS=30 ROWS=3 name="atencao"><?php echo $linha['atencao']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_memoria(){
	window.open('popup/memoria.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_memoria" onclick="popup_memoria()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Memória:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="memoria"><?php echo $linha['memoria']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_senso(){
	window.open('popup/senso.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_senso" onclick="popup_senso()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Senso-Percepsão:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="senso"><?php echo $linha['senso']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_pensamento(){
	window.open('popup/pensamento.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_pensamento" onclick="popup_pensamento()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Pensamento:</b>

      </td>


     <td><TEXTAREA COLS=30 ROWS=3 name="pensamento"><?php echo $linha['pensamento']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_linguagem(){
	window.open('popup/linguagem.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_linguagem" onclick="popup_linguagem()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Linguagem:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="linguagem"><?php echo $linha['linguagem']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>
     <td>
	
	<script languague="javascript">
	function popup_inteligencia(){
	window.open('popup/inteligencia.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_inteligencia" onclick="popup_inteligencia()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Inteligência:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="inteligencia"><?php echo $linha['inteligencia']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_consciencia_doeu(){
	window.open('popup/consciencia_doeu.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_consciencia_doeu" onclick="popup_consciencia_doeu()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Consciência do eu:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="do_eu"><?php echo $linha['do_eu']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_humor(){
	window.open('popup/humor.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_humor" onclick="popup_humor()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>  Humor:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="humor"><?php echo $linha['humor']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_afeto(){
	window.open('popup/afeto.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_afeto" onclick="popup_afeto()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Afeto:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="afeto"><?php echo $linha['afeto']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_volicao(){
	window.open('popup/volicao.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_volicao" onclick="popup_volicao()"><img src="images/pdf_icon.png"></a> </a>
	
	<b> Volição:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="volicao"><?php echo $linha['volicao']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_psicomotricidade(){
	window.open('popup/psicomotricidade.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_psicomotricidade" onclick="popup_psicomotricidade()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>  Psicomotricidade:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="psi"><?php echo $linha['psi']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_insight(){
	window.open('popup/insight.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_insight" onclick="popup_insight()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>  Insight:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="insight"><?php echo $linha['insight']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_contratransferencia(){
	window.open('popup/contratransferencia.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_contratransferencia" onclick="popup_contratransferencia()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>  Contratransferência:</b>

      </td>

     <td><TEXTAREA COLS=30 ROWS=3 name="contratrans"><?php echo $linha['contratrans']; ?></TEXTAREA> <img src="images/lupa.png"></td>
    </tr>

    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
			Conclusões e Conduta
			</big>
		</big>		
	   </font>
	</td>
    </tr>

    <tr>
     <td><b>  Súmula psiquiátrica:</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="sumula"><?php echo $linha['sumula']; ?></TEXTAREA>
    </tr>

    <tr>
     <td><b>  Diagnóstico :</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="diagnostico"><?php echo $linha['diagnostico']; ?></TEXTAREA>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_cid(){
	window.open('popup/cid.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_cid" onclick="popup_cid()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>CID - 10:</b>

      </td>

     <td><input name="cid" type="text" id="cid" size="30" maxlength="60" value="<?php echo $linha['cid']; ?>" /></td>
    </tr>

    <tr>

     <td>
	
	<script languague="javascript">
	function popup_dsm(){
	window.open('popup/dsm.php','popup','width=600,height=400,scrolling=auto,top=0,left=0')
	}
	</script>
	<a href="#popup_dsm" onclick="popup_dsm()"><img src="images/pdf_icon.png"></a> </a>
	
	<b>DSM - IV - TR:</b>

      </td>

     <td><input name="dsm" type="text" id="dsm" size="30" maxlength="60" value="<?php echo $linha['dsm']; ?>" /></td>
    </tr>
		
    <tr>
     <td><b>  Exames compl. solicitados :</b></td>
     <td><TEXTAREA COLS=30 ROWS=3 name="exames_compl"><?php echo $linha['exames_compl']; ?></TEXTAREA>
    </tr>

	<input type="hidden" name="id" value="<?php echo $linha['idcliente']; ?>" />
    <tr>
	<td><center><img onclick="history.back();" src="images/voltar.gif"/></center></a></td>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Alterar!" /> 
      </td>
    </tr>
	

   </table>
  </form>
 </body>
</html>

<?php // fechando o if da verificação do idcliente1
}
else{

	if ($idcliente2 != null){
		$sql= "SELECT *,date_format(data_nasc,'%d/%m/%Y') as data_nasc from cliente where idcliente = ".$idcliente2."; ";
		
		$resultado = mysql_query($sql,$conexao);
		
		if ($resultado) 
			$rows=mysql_num_rows($resultado);
		
		if ($rows <= 0){
			echo '<script type="text/javascript">alert("Nao encontramos nenhum registro!")</script>';
			echo "<script>location.href='index.php';</script>";
		}
		else{
			$linha = mysql_fetch_array($resultado);
		}
?>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 
 </head>

<body background="images/fundo.png">
 
   <center>
    <font color="navy">
    <big>
		<big>
			<big>
				Anamnese
			</big>
		</big>
	</big>
	</font>
	
   </center>

   <font color="navy">
    <big>
		<big>
			Dados Pessoais
		</big>
	</big>		
   </font>
   

    <table width="770" border="0">


     <tr>
      <td width="69"><b>Nome:</b></td>
      <td width="546"><?php echo $linha['nome']; ?></td>
	  
    </tr>


	<tr>
     <td><b>Data Nasc.:</b></td>
     <td><?php echo $linha['data_nasc']; ?></td>
    </tr>

    <tr>
     <td><b>Filia&ccedil;&atilde;o:</b></td>
    
    
     <td>
     <b>Mãe:</b>
    	<?php echo $linha['mae']; ?>
    
   
     <b>Pai:</b>
	<?php echo $linha['pai']; ?>
     </td>

    </tr>
    
 
    <tr>
     <td><b>Identidade:</b></td>
     <td>
     <?php echo $linha['rg']; ?>

     <b>Exp.:</b>
     <?php echo $linha['exp']; ?>
     </td>
    </tr>

    <tr>
     <td><b>Sexo:</b></td>
     <td><?php echo $linha['sexo']; ?></td>
    </tr>
     
    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    <tr>
     <td><b>Etnia:</b></td>
     <td><?php echo $linha['etnia']; ?></td>
    </tr>

    <tr>
     <td><b>Estado Civil:</b></td>
     <td><?php echo $linha['estado_civil']; ?></td>
    </tr>

    <tr>
     <td>
     <br>
     </td>
    </tr>
    

    <tr>
     <td><b>Profissão Atual:</b></td>
     <td><?php echo $linha['proff_atual']; ?></td>
    </tr>


    <tr>
     <td><b>Profissão Anterior:</b></td>
     <td><?php echo $linha['proff_anterior']; ?></td>
    </tr>
    
    
    <tr>
     <td>
     <br>
     </td>
    </tr>     
     
    <tr>
     <td><b>Endere&ccedil;o Residencial:</b></td>
     <td><?php echo $linha['endereco_res']; ?></td>
    </tr>
	
	<tr>
     <td><b>Numero:</b></td>
     <td><?php echo $linha['n_res']; ?></td>
    </tr>
	
    <tr>
     <td><b>Bairro:</b></td>
     <td><?php echo $linha['bairro_res']; ?></td>
    </tr>



    <tr>
     <td>
     <br>
     </td>
    </tr>

    <tr>
     <td><b>Endere&ccedil;o Profissional</b></td>
     <td><?php echo $linha['endereco_pro']; ?></td>
    </tr>
	
	<tr>
     <td><b>Numero:</b></td>
     <td><?php echo $linha['n_pro']; ?></td>
    </tr>
	
    <tr>
     <td><b>Bairro:</b></td>
     <td><?php echo $linha['bairro_pro']; ?></td>
    </tr>

    <tr>
     <td>
     <br>
     </td>
    </tr>

    <tr>
     <td><b>Telefone Residencial:</b></td>
     <td><?php echo $linha['tel']; ?></td>
    </tr>
	
    <tr>
     <td><b>Telefone Profissional:</b></td>
     <td><?php echo $linha['tel_pro']; ?></td>
    </tr>
    
    <tr>
     <td><b>Celular:</b></td>
     <td><?php echo $linha['cel']; ?></td>
    </tr>
	
    <tr>
     <td><b>Contato ou responsável:</b></td>
     <td><?php echo $linha['contato']; ?></td>
    </tr>


    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
				Procura do serviço
			</big>
		</big>		
	   </font>
	</td>
    </tr>


    

    <tr>
     <td><b>Demanda de:</b></td>
     <td><?php echo $linha['demanda']; ?></td>
    </tr>
    
    <tr>
     <td><b>Indicado por:</b></td>
     <td><?php echo $linha['indicado']; ?></td>
    </tr>
	

    <tr>
     <td>
     <br>
     </td>
    </tr>
    
    
    <tr>
     <td><b>Queixa principal:</b></td>
     <td><?php echo $linha['queixa']; ?></td>
    </tr>

    <tr>
     <td><b>História da doença atual:</b></td>
     <td><?php echo $linha['hist_doenca']; ?></td>
    </tr>

    <tr>
     <td><b>Internações hospitalares:</b></td>
     <td><?php echo $linha['inter_hosp']; ?></td>
    </tr>    
    
    <tr>
     <td><b>História familial:</b></td>
     <td><?php echo $linha['hist_familia']; ?></td>
    </tr>    

    <tr>
     <td><b>História pessoal e social:</b></td>
     <td><?php echo $linha['hist_pessoal']; ?></td>
    </tr>    

    <tr>
     <td><b>História escolar:</b></td>
     <td><?php echo $linha['hist_escolar']; ?></td>
    </tr>    

    <tr>
     <td><b>História ocupacional:</b></td>
    <td><?php echo $linha['hist_ocu']; ?></td>
    </tr>    

    <tr>
     <td><b>Hábitos de vida:</b></td>
     <td><?php echo $linha['habitos']; ?></td>
    </tr>    

    <tr>
     <td><b>Revisão dos sistemas:</b></td>
     <td><?php echo $linha['revisao']; ?></td>
    </tr>
      
     <tr>
		 <td> 
		   <font color="navy">
			<big>
				<big>
					<br>
					Exame físico
				</big>
			</big>		
		   </font>
		</td>
	</tr>
	
	
    <tr>
     <td><b>Ectoscopia:</b></td>
     <td><?php echo $linha['ecto']; ?></td>
    </tr>
    
    <tr>
     <td><b>Exame sistêmico:</b></td>
     <td><?php echo $linha['exame_sis']; ?></td>
    </tr>
    
    <tr>
     <td><b>Exame neurológico:</b></td>
     <td><?php echo $linha['exame_neu']; ?></td>
    </tr>
    
        
    <tr> 
     <td>
     <br>
     </td>
    </tr>
    <tr>

    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
				<br>
				Exame psíquico
			</big>
		</big>		
	   </font>
	</td>
    </tr>

    <tr>
     <td>
	
	<b> Aparência:</b>

      </td>
     <td><?php echo $linha['aparencia']; ?></td>
    </tr>

    <tr>

     <td>
	<b> Atitude:</b>
      </td>

     <td><?php echo $linha['atitude']; ?></td>
    </tr>

    <tr>

     <td>


	
	<b> Consciência:</b>

      </td>

     <td><?php echo $linha['consciencia']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Orientação:</b>

      </td>


     <td><?php echo $linha['orientacao']; ?></td>
    </tr>

    <tr>

     <td>

	
	<b> Atenção:</b>

      </td>


     <td><?php echo $linha['atencao']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Memória:</b>

      </td>

     <td><?php echo $linha['memoria']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Senso-Percepsão:</b>

      </td>

     <td><?php echo $linha['senso']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Pensamento:</b>

      </td>


     <td><?php echo $linha['pensamento']; ?></td>
    </tr>

    <tr>

     <td>

	
	<b> Linguagem:</b>

      </td>

     <td><?php echo $linha['linguagem']; ?></td>
    </tr>

    <tr>
     <td>

	<b> Inteligência:</b>

      </td>

     <td><?php echo $linha['inteligencia']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Consciência do eu:</b>

      </td>

     <td><?php echo $linha['do_eu']; ?></td>
    </tr>

    <tr>

     <td>

	<b>  Humor:</b>

      </td>

     <td><?php echo $linha['humor']; ?></td>
    </tr>

    <tr>

     <td>

	<b> Afeto:</b>

      </td>

     <td><?php echo $linha['afeto']; ?></td>
    </tr>

    <tr>

     <td>

	
	<b> Volição:</b>

      </td>

     <td><?php echo $linha['volicao']; ?></td>
    </tr>

    <tr>

     <td>

	<b>  Psicomotricidade:</b>

      </td>

     <td><?php echo $linha['psi']; ?></td>
    </tr>

    <tr>

     <td>

	<b>  Insight:</b>

      </td>

     <td><?php echo $linha['insight']; ?></td>
    </tr>

    <tr>

     <td>

	<b>  Contratransferência:</b>

      </td>

     <td><?php echo $linha['contratrans']; ?></td>
    </tr>


    <tr>
        <td> 
	   <font color="navy">
		<big>
			<big>
			<br>
			Conclusões e Conduta
			<br>
			</big>
			
		</big>		
	   </font>
	</td>
    </tr>



    <tr>
     <td><b>  Súmula psiquiátrica:</b></td>
     <td><?php echo $linha['sumula']; ?></td>
    </tr>

    <tr>
     <td><b>  Diagnóstico :</b></td>
     <td><?php echo $linha['diagnostico']; ?></td>
    </tr>

    <tr>

     <td>

	<b>CID - 10:</b>

      </td>

     <td><?php echo $linha['cid']; ?></td>
    </tr>

    <tr>

     <td>

	<b>DSM - IV - TR:</b>

      </td>

     <td><?php echo $linha['dsm']; ?></td>
    </tr>
		
    <tr>
     <td><b>  Exames compl. solicitados :</b></td>
     <td><?php echo $linha['exames_compl']; ?></td>
    </tr>

    <tr> 
     <td>
     <br>
     </td>
    </tr>
    <tr>

     <tr>
      <td width="69"><b>ID:</b></td>
      <td><b><?php echo $linha['idcliente']; ?></b></td>
    </tr>

    <tr> 
     <td>
     <br>
     </td>
    </tr>

    <tr>
	<td><center><img onclick="history.back();" src="images/voltar.gif"/></center></td>

	<td><center><img onclick="print();" src="images/imprimir.jpg"/></center></a></td>
    </tr>
	
	

   </table>
 </body>
</html>


		


<?php	
	}


}
?>
