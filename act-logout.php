<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['hak_akses']);
	session_destroy();
	header("Location:index.php");
?>