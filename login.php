<?php

session_start();

$login = $_POST["p1"];
$senha = $_POST["p2"];


$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$conexao = mysql_connect($servidor,$usuario,$senhadb);

if (!$conexao)
die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysql_error());

$sql = "SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha."' ";

$consulta = mysql_db_query("saude",$sql);

$contagem = mysql_fetch_array($consulta);

$resposta=mysql_num_rows($consulta);


if ($resposta > 0){

	$v1 = $contagem['login'];
	$v2 = $contagem['senha'];
	$tipo = $contagem['tipo'];
	
	if ( (strcmp( $v1, $login)==0) && (strcmp($v2,$senha)==0) ){
		   $_SESSION['nome_usuario']=$login;
		   $_SESSION['senha_usuario']=$senha;
			mysql_close($conexao);
			if($tipo == 'A'){
				echo "<script>location.href='admin/index.php';</script>";
			}
			else{
				if($tipo == 'C'){
					echo "<script>location.href='convidado/index.php';</script>";
				}
			}
	}
}
else{	
		echo '<script type="text/javascript">alert("Falha ao efetuar o login!")</script>';
 		echo "<script>location.href='index.php';</script>";
}

?>
