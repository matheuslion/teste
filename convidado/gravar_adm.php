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
	
	$sql = "SELECT * FROM usuario WHERE login = '".$login."'  ";

	$consulta = mysql_query($sql,$conexao);

	$resposta=mysql_num_rows($consulta);
	
	
	
	if ( $resposta > 0 ){
	
	echo '<script type="text/javascript">alert("Existe algum usuario cadastrado com esse login!!!")</script>';
	echo "<script>location.href='pag_cadastra_usuario.php';</script>";	
	}
	else{		if($senha == $confirm_senha){
			$query = "INSERT INTO usuario (login,senha,nome_user,tipo) VALUES ('$login','$senha','$nome','$tipo')";		}		else{			echo '<script type="text/javascript">alert("As senhas não conferem!!!")</script>';			echo "<script>location.href='pag_cadastra_usuario.php';</script>";					}
	   // echo $query;
		if( mysql_query($query,$conexao) ){
			echo '<script type="text/javascript">alert("Usuario cadastro com sucesso!")</script>';
			echo "<script>location.href='index.php';</script>";
		}
		else{
			echo '<script type="text/javascript">alert("Falha ao cadastrar!")</script>';
			echo "<script>location.href='index.php';</script>";		
		}

	}
?>

