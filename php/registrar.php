<?php 
require_once '../config/bd.php';
require_once '../config/secu.php';

if (isset($_POST['nome']) && isset($_POST['tel']) && isset($_POST['num']) && isset($_POST['rua']) && isset($_POST['bair']) == 'nome'.'tel'.'num'.'rua'.'bair') {
	
	$nome = catks ($_POST['nome']);
	$tel = catks ($_POST['tel']);
	$complemento = catks ($_POST['num']);
	$rua = catks ($_POST['rua']);
	$bairro = catks ($_POST['bair']);

	if (!is_string($_POST['nome']) || is_numeric($_POST['nome']) || empty($_POST['nome']) && empty($_POST['rua']) && !is_numeric($_POST['tel']) || empty($_POST['tel']) && !is_string($_POST['bair']) || is_numeric($_POST['bair']) || empty($_POST['bair']) && empty($_POST['num'])){

        echo "Preencha os campos corretamente."."<br>";
		echo "<a href='../pag/registro.html'>Voltar</a>";
		
	}else{

	$sql = "select * from cad_dev where nome = '$nome'";

	$result = mysqli_query($lk, $sql);

	$resulta = mysqli_num_rows($result);

	if ($resulta > 0) {

		echo "Usuário já cadastrado."."<br>";
		echo "<a href='../pag/delivery.html'>Voltar</a>";

	}else{

		$sql1 = "insert into cad_dev(nome, tel, numero, rua, bairro) values('$nome', '$tel', '$complemento', '$rua', '$bairro')";
		
		$res = mysqli_query($lk, $sql1);

		if (!$res) {

			die("Erro ao cadastrar. ".mysqli_error($lk));

		}else{

			echo "Cadastrado com Sucesso.";
			header('location: ../pag/delivery.html');
		}
	}
}
}
 ?>