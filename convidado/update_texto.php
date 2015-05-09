<?php

include ("conexao.php");


$t = $_POST['titulo'];
$tx = $_POST['texto'];
$d = $_POST['descricao'];



// VERIFICA SE O CAMPO PDF ESTÁ VAZIO
if ($_FILES['pdf']['name'] != "") {

$_FILES['pdf']['name'] = $d.".pdf";

// SE O CAMPO NÃO ESTIVER VAZIO MOVE O ARQUIVO PARA UMA PASTA
 move_uploaded_file($_FILES['pdf']['tmp_name'],"pdfs/".$_FILES['pdf']['name']);
 // $PDF_PATH É A VARIAVEL Q GUARDA O ENDEREÇO DO PDF(pra adicionar na base de dados)
 $pdf_path = "PASTA/".$_FILES['pdf']['name'];

 			$sql = "UPDATE texto set pdf = 1  where descricao = '$d' ";


			if (mysql_query ($sql,$conexao) ) {

			echo '<script type="text/javascript">alert("Texto alterado com sucesso!")</script>';
			echo "<script>location.href='pag_cadastra_texto.php';</script>";

			}
			else{
			
			echo '<script type="text/javascript">alert("Falha ao alterar texto!")</script>';
			echo "<script>location.href='pag_cadastra_texto.php';</script>";
			
			}
	
} else {
			$sql_pdf = "UPDATE texto set pdf = '0' where descricao = '$d' ";
			mysql_query ($sql_pdf,$conexao);
			
			$sql = "UPDATE texto set titulo = '$t' , texto = '$tx' where descricao = '$d' ";
			if (mysql_query ($sql,$conexao) ) {

			echo '<script type="text/javascript">alert("Texto alterado com sucesso!")</script>';
			echo "<script>location.href='pag_cadastra_texto.php';</script>";

			}
			else{
			
			echo '<script type="text/javascript">alert("Falha ao alterar texto!")</script>';
			echo "<script>location.href='pag_cadastra_texto.php';</script>";
			
			}

}
?>
