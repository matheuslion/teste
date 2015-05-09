<html>

<head>
<style type="text/css">

<!--

.style1 {

color: #000000;

font-size: x-small;

}

.style3 {color: #000000; font-size: x-small; }

</style>

<script type="text/javascript">

function validaCampo()

{

if(document.cadastro.nome.value=="")

{

alert("O Campo nome é obrigatório!");

return false;

}

else

if(document.cadastro.email.value=="")

{

alert("O Campo email é obrigatório!");

return false;

}

else

if(document.cadastro.login.value=="")

{

alert("O Campo login é obrigatório!");

return false;

}

else

if(document.cadastro.senha.value=="")

{

alert("O Campo senha é obrigatório!");

return false;

}

else

return true;

}

<!-- Fim do JavaScript que validará os campos obrigatórios! -->

</script>

</head>



<h2><center>Cadastro de Usu&aacute;rio</center></h2>

<br>

<body>

<form id="cadastro" name="cadastro" method="post" action="gravar_adm.php" onsubmit="return validaCampo(); return false;">

  <table width="700" border="0">



  <tr>

      <td width="69">Nome:</td>

      <td width="546"><input name="nome" type="text" id="nome" size="30" maxlength="60" />

       <font color="red">*</font></td>

    </tr>

    <tr>

      <td width="69">Login:</td>

      <td width="546"><input name="login" type="text" id="login" size="30" maxlength="60" />

        <font color="red">*</font></td>

    </tr>

    <tr>

      <td>Senha:</td>

      <td><input name="senha" type="password" id="senha" size="30" maxlength="60" />

      <font color="red">*</font></td>

    </tr>

    <tr>

      <td>Confirmar Senha:</td>

      <td><input name="confirm_senha" type="password" id="confirm_senha" size="30" maxlength="60" />

      <font color="red">*</font></td>

    </tr>
	

    <tr>

      <td>Tipo:</td>

      <td><input name="tipo" type="radio" value="A" checked="checked" />

        Admistrador

        <input name="tipo" type="radio" value="C" />

        Convidado <font color="red">*</font> </td>

    </tr>

    <tr>

      <td colspan="2"><p>

        <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar!" /> 



          <input name="limpar" type="reset" id="limpar" value="Limpar!" />

          

          <font color="red">* Campos com * sao obrigatorios!</font></p>

      <p>  </p></td>

    </tr>

  </table>

</form>				  


