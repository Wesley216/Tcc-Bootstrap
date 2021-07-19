<?php  
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_pedido']) {

	header('location: ../../pag/delivery.html');
	
}else{

if (isset($_POST['tam']) && isset($_POST['tipo_pizza']) == 'tam'.'tipo_pizza') {

	$tam = catks ($_POST['tam']);
	$tipo = catks ($_POST['tipo_pizza']);

	$sql = "insert into pedidos(tam, tipo_pizza, id_cad_dev) values('$tam', '$tipo','$_SESSION[id_pedido]')";

	$result = mysqli_query($lk, $sql);

	if (!$result) {

		exit("Erro. ".mysqli_error($lk));

	}else{

		header('location: ../../php/result pedido.php');
	}
}
}
?>