<?php
	session_start();
	session_unset();
	session_destroy();
	
	//echo '<script type="text/javascript">alert("Logout realizado com sucesso!!!")</script>';
	echo "<script>location.href='../index.php';</script>";
?>
