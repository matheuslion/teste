<?php

@session_start();

if(IsSet($_SESSION['nome_usuario']))
   $nome_usuario=$_SESSION['nome_usuario'];
if(IsSet($_SESSION['senha_usuario']))
   $senha_usuario=$_SESSION['senha_usuario'];


   if(!(empty($nome_usuario) OR empty($senha_usuario)))
   {
      

      $con = mysql_connect("localhost","root","");
      mysql_select_db("saude");

      $sql=mysql_query("SELECT * FROM usuario WHERE login='$nome_usuario'");
      $conta=mysql_num_rows($sql);
      
      if($conta>=1)
      {
         if($senha_usuario != mysql_result($sql,0,"senha"))
         {
            unset($_SESSION['nome_usuario']);
            unset($_SESSION['senha_usuario']);
            echo "voce nao efetuou o login!";
            exit;
         }
      }
      else
      {
            unset($_SESSION['nome_usuario']);
            unset($_SESSION['senha_usuario']);
            echo "voce nao efetuou o login!";
            exit;
      }
   }
   else
   {
   echo "voce nao efetuou o Login!";
   exit;
   }

mysql_close($con); 
?>
