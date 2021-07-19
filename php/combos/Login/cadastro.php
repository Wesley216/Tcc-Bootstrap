<?php  
require_once '../../../config/bd.php';
require_once '../../../config/atk1.php';

if (isset($_POST['nome']) && isset($_POST['tel']) && isset($_POST['bair']) && isset($_POST['rua']) && isset($_POST['num']) == 'nome'.'tel'.'bair'.'rua'.'num') {

	$nome = catks ($_POST['nome']);
	$tel = catks ($_POST['tel']);
	$bairro = catks ($_POST['bair']);
	$rua = catks ($_POST['rua']);
	$num = catks ($_POST['num']);

	if (!is_string($_POST['nome']) || is_numeric($_POST['nome']) || empty($_POST['nome']) && empty($_POST['rua']) && !is_numeric($_POST['tel']) || empty($_POST['tel']) && !is_string($_POST['bair']) || is_numeric($_POST['bair']) || empty($_POST['bair']) && empty($_POST['num'])){

        echo "Preencha os campos corretamente."."<br>";
		echo "<a href='../../../pag/Combo/Login/cadastro.html'>Voltar</a>";

    }else{

	$sql = "select * from cad_combo where nome = '$nome'";

	$result = mysqli_query($lk, $sql);

	$resulta = mysqli_num_rows($result);

	if ($resulta > 0) {

		echo "Usuário já cadastrado."."<br>";
		echo "<a href='../../../pag/Combo/Login/login_combo_super.html'>Voltar</a>";

	}else{

		$sql1 = "insert into cad_combo(nome, tel, bairro, rua, numero) values('$nome', '$tel', '$bairro', '$rua', '$num')";

		$res = mysqli_query($lk, $sql1);

	if (!$res) {
		
		exit('Erro: '.mysqli_error($lk));
	
	}else{

		header('location: ../../../pag/Combo/Login/login_combo_super.html');
	}
	}
}
}
?>