<?php 
require_once '../config/bd.php';
require_once '../config/secu.php';

session_start();

if (isset($_POST['nome']) && isset($_POST['tel']) && isset($_POST['rua']) && isset($_POST['bair']) && isset($_POST['num']) == 'nome'.'tel'.'rua'.'bair'.'num'){

$nome = catks ($_POST['nome']);
$tel = catks ($_POST['tel']);	
$rua = catks ($_POST['rua']);
$bair = catks ($_POST['bair']);
$complemento = catks ($_POST['num']);


if (!is_string($_POST['nome']) || is_numeric($_POST['nome']) || empty($_POST['nome']) && empty($_POST['rua']) && !is_numeric($_POST['tel']) || empty($_POST['tel']) && !is_string($_POST['bair']) || is_numeric($_POST['bair']) || empty($_POST['bair']) && empty($_POST['num'])) {

	echo "Preencha os campos corretamente."."<br>";
	echo "<a href='../pag/delivery.html'>Voltar</a>";
	
}else{


$sql = "select * from cad_dev where nome = '$nome'";

$result = mysqli_query($lk, $sql);

if(mysqli_num_rows($result) > 0){

	$sql1 = "select * from cad_dev where nome = '$nome' and tel = '$tel' and rua = '$rua' and bairro = '$bair' and numero = '$complemento'";

	$resulta = mysqli_query($lk, $sql1);

	if(mysqli_num_rows($resulta) == 1) {

		$date = mysqli_fetch_array($resulta);

		$_SESSION['pedido'] = true;

		$_SESSION['id_pedido'] = $date['id'];

		header('location: ../pag/Delivery/dev_card.html');

	}else{

			echo "Campo inválido."."<br>";
			echo "<a href='../pag/delivery.html'>Voltar</a>";
	}
	
	}else{

		header('location: ../pag/registro.html');

	}
}
}
?>