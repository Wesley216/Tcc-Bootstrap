<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "TCC";

$lk = mysqli_connect($server, $user, $pass, $db)
	or die("Não foi possivel conectar.".mysqli_error($lk));
?>