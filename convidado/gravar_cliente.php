<?phpsession_start();

include('conexao.php');

if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//exit;

foreach($_POST as $key=>$value) { 
  $$key=$value; 
}	
	
	$sql = "SELECT rg FROM cliente WHERE rg = '".$rg."'  ";

	$consulta = mysql_query($sql,$conexao);

	$resposta=mysql_num_rows($consulta);
	
	
	
	if ( $resposta > 0 ){
	
	echo '<script type="text/javascript">alert("Existe algum cliente cadastro com esse RG!!!")</script>';
	echo "<script>location.href='cliente.html';</script>";	
	}
	else{
		$query = "INSERT INTO cliente (idcliente,`nome`, 
		`data_nasc`, `mae`, `pai`, `rg`, `exp`, 
		`sexo`, 
		`etnia`, 
		`estado_civil`, 
		`proff_atual`, 
		`proff_anterior`, 
		`endereco_res`, 
		`n_res`, 
		`bairro_res`, 
		`endereco_pro`, 
		`n_pro` , 
		`bairro_pro`, 
		`tel`, 
		`tel_pro`, 
		`cel`, 
		`contato`, 
		`demanda`, 
		`indicado`, 
		`queixa`, 
		`hist_doenca`, 
		`inter_hosp`, 
		`hist_familia`, 
		`hist_pessoal`, 
		`hist_escolar`, 
		`hist_ocu`, 
		`habitos`, 
		`revisao`, 
		`ecto`, 
		`exame_sis`,
		`exame_neu`,
		`aparencia`, 
		`atitude`, 
		`consciencia`, 
		`orientacao`, 
		`atencao`, 
		`memoria`, 
		`senso`, 
		`pensamento`, 
		`linguagem`, 
		`inteligencia`, 
		`do_eu`, 
		`humor`, 
		`afeto`, 
		`volicao`, 
		`psi`, 
		`insight`, 
		`contratrans`, 
		`sumula`, 
		`diagnostico`, 
		`cid`, 
		`dsm`, 
		`exames_compl`)	VALUES ('$idcliente','$nome','$data_nasc', 			'$mae','$pai','$rg','$exp','$sexo','$etnia','$estado_civil','$proff_atual','$proff_anterior', 
		'$endereco_res','$n_res','$bairro_res','$endereco_pro','$n_pro', 
		'$bairro_pro','$tel','$tel_pro','$cel','$contato','$demanda', 
		'$indicado','$queixa','$hist_doenca','$inter_hosp','$hist_familia', 
		'$hist_pessoal','$hist_escolar','$hist_ocu','$habitos','$revisao', 
		'$ecto','$exame_sis','$exame_neu','$aparencia','$atitude','$consciencia','$orientacao', 
		'$atencao','$memoria','$senso','$pensamento','$linguagem',
		'$inteligencia','$do_eu','$humor','$afeto','$volicao','$psi', 
		'$insight','$contratrans','$sumula','$diagnostico','$cid', 
		'$dsm','$exames_compl')";
		
	   // echo $query;
		
		if( mysql_query($query,$conexao) ){
			echo '<script type="text/javascript">alert("Cliente cadastro com sucesso!")</script>';
			echo "<script>location.href='index.php';</script>";
		}
		else{
		
			echo '<script type="text/javascript">alert("Falha ao cadastrar!")</script>';
			echo "<script>location.href='index.php';</script>";		
		
		}

	}
?>

