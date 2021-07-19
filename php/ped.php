<?php 
require_once '../config/bd.php';
require_once '../config/secu.php';

session_start();

if(!$_SESSION['id_cardapio']){

	header('location: ../pag/log_card.html');

}else{

if (isset($_POST['tipo']) && isset($_POST['tipo_pizza']) == 'tipo'.'tipo_pizza') {

$tipo = catks ($_POST['tipo']);
$pizza = catks ($_POST['tipo_pizza']);

if (empty($_POST['tipo']) && empty($_POST['tipo_pizza'])) {
	
	header('location: ../pag/cardapio.html');

}else{

	$sql = "insert into cardapio(tipo, tipo_pizza, id_cad_combo) values('$tipo', '$pizza', '$_SESSION[id_cardapio]')";

	$result = mysqli_query($lk, $sql);

 if (!$result) {

	die("Erro: ".mysqli_error($lk));

 }else{

	header("location: ../php/result cardapio.php");
 }	
}
}
}
?>