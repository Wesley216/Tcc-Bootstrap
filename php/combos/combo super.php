<?php  
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_combo']) {

	header('location: ../../pag/Combo/Login/comb_logar.html');

}else{

if (isset($_POST['tipo_combo']) && isset($_POST['tipo_pizza']) == 'tipo_combo'.'tipo_pizza') {
	
	$combo_tipo = catks ($_POST['tipo_combo']);
	
	$tipo = catks ($_POST['tipo_pizza']);

	$sql = "insert into combo_super(tipo_combo, tipo_pizza, id_cad_combo) values('$combo_tipo', '$tipo','$_SESSION[id_combo]')";

	$result = mysqli_query($lk, $sql);

	if (!$result) {

		exit('Erro: '.mysqli_error($lk));
		
	}else{
		
		header('location: ../../php/result combo.php');
	}
}
}
?>