<?php  
require_once '../config/bd.php';

session_start();

if (!$_SESSION['id_combo']) {
	
	header('location: ../index.html');

}else{

	//MOSTRA OS PEDIDOS DO COMBO SUPER

	$sql = "select a.nome, a.bairro, a.rua, a.numero, c.tipo_combo, c.tipo_pizza from cad_combo a, combo_super c where a.id = '$_SESSION[id_combo]' and c.id_cad_combo = '$_SESSION[id_combo]' order by c.id desc limit 1";

	$result = mysqli_query($lk, $sql);

	//MOSTRA OS PEDIDOS DO COMBO ELITE

	$sql1 = "select a.nome, a.bairro, a.rua, a.numero, c.tipo_combo, c.tipo_pizza from cad_combo a, combo_top c where a.id = '$_SESSION[id_combo]' and c.id_cad_combo = '$_SESSION[id_combo]'  order by c.id desc limit 1";

	$res = mysqli_query($lk, $sql1);

	//MOSTRA OS PEDIDOS DO COMBO TOP

	$sql2 = "select a.nome, a.bairro, a.rua, a.numero, c.tipo_combo, c.tipo_pizza from cad_combo a, combo_elite c where a.id = '$_SESSION[id_combo]' and c.id_cad_combo = '$_SESSION[id_combo]'  order by c.id desc limit 1";

	$resul = mysqli_query($lk, $sql2);

	session_unset();
	session_destroy();
	
	if (!$result && !$res && !$resul) {
		
		exit('Erro: '.mysqli_error($lk));

	}

}
?>