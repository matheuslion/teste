<?php

include ("conexao.php");

foreach($_POST as $key=>$value) { 
  $$key=$value; 
}	

function valida_data($data)
{
        $data = split("[-,/]", $data);
        if(!checkdate($data[1], $data[0], $data[2]) and !checkdate($data[1], $data[2], $data[0])) {
                return false;
        }
        return true;
}

function converte_data($data)
{
        if(valida_data($data)) {
                return implode(!strstr($data, '/') ? "/" : "-", array_reverse(explode(!strstr($data, '/') ? "-" : "/", $data)));
        }       
}

$data_nasc = converte_data ($data_nasc);

echo $data_nasc;

$sql = "UPDATE cliente set nome = '$nome' ,
		data_nasc = '$data_nasc',
		mae = '$mae',
		pai = '$pai',
		rg = '$rg',
		exp ='$exp', 
		sexo = '$sexo', 
		etnia = '$etnia', 
		estado_civil = '$estado_civil', 
		proff_atual = '$proff_atual', 
		proff_anterior = '$proff_anterior', 
		endereco_res = '$endereco_res', 
		n_res = $n_res, 
		bairro_res = '$bairro_res', 
		endereco_pro = '$endereco_pro', 
		n_pro = '$n_pro', 
		bairro_pro = '$bairro_pro', 
		tel = '$tel', 
		tel_pro = '$tel_pro', 
		cel = '$cel', 
		contato = '$contato', 
		demanda = '$demanda', 
		indicado = '$indicado', 
		queixa = '$queixa', 
		hist_doenca = '$hist_doenca', 
		inter_hosp = '$inter_hosp', 
		hist_familia = '$hist_familia', 
		hist_pessoal = '$hist_pessoal', 
		hist_escolar = '$hist_escolar', 
		hist_ocu = '$hist_ocu', 
		habitos = '$habitos', 
		revisao = '$revisao', 
		ecto = '$ecto', 
		exame_sis = '$exame_sis',
		exame_neu = '$exame_neu',
		aparencia = '$aparencia', 
		atitude = '$atitude', 
		consciencia = '$consciencia', 
		orientacao = '$orientacao', 
		atencao = '$atencao', 
		memoria = '$memoria', 
		senso = '$senso', 
		pensamento = '$pensamento', 
		linguagem = '$linguagem', 
		inteligencia = '$inteligencia', 
		do_eu = '$do_eu', 
		humor = '$humor', 
		afeto = '$afeto', 
		volicao = '$volicao', 
		psi = '$psi', 
		insight = '$insight', 
		contratrans = '$contratrans', 
		sumula = '$sumula', 
		diagnostico ='$diagnostico', 
		cid = '$cid', 
		dsm = '$dsm', 
		exames_compl = '$exames_compl' 
		where idcliente = $id ";
		
		
		
		//echo $sql;
	

			if (mysql_query ($sql,$conexao) ) {

		echo '<script type="text/javascript">alert("Texto alterado com sucesso!")</script>';
		echo "<script>location.href='prontuarios.php';</script>";

			}
			else{
			
			echo '<script type="text/javascript">alert("Falha ao alterar texto!")</script>';
			echo "<script>location.href='prontuarios.php';</script>";
			
			}


?>
