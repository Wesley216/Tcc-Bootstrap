<?php
require_once '../config/bd.php';
require_once '../config/secu.php';

session_start();

if(isset($_POST['nome']) && isset($_POST['tel']) && isset($_POST['bair']) && isset($_POST['rua']) && isset($_POST['num']) == 'nome'.'tel'.'bair'.'rua'.'num'){

    $nome = catks ($_POST['nome']);
    $tel = catks ($_POST['tel']);
    $bair = catks ($_POST['bair']);
    $rua = catks ($_POST['rua']);
    $num = catks ($_POST['num']);

if (!is_string($_POST['nome']) || is_numeric($_POST['nome']) || empty($_POST['nome']) && empty($_POST['rua']) && !is_numeric($_POST['tel']) || empty($_POST['tel']) && !is_string($_POST['bair']) || is_numeric($_POST['bair']) || empty($_POST['bair']) && empty($_POST['num'])){

        echo "Preencha os campos corretamente."."<br>";
		echo "<a href='../pag/log_card.html'>Voltar</a>";
}else{


    $sql = "select * from cad_combo where nome = '$nome'";
    $result = mysqli_query($lk, $sql);

    if (mysqli_num_rows($result) > 0) {

        $sql1 = "select * from cad_combo where nome = '$nome' and tel = '$tel' and bairro = '$bair' and rua = '$rua' and numero = '$num'";

        $resulta = mysqli_query($lk, $sql1);
        
        if (mysqli_num_rows($resulta) == 1) {
           
            $date = mysqli_fetch_array($resulta);

		    $_SESSION['cardapio'] = true;

		    $_SESSION['id_cardapio'] = $date['id'];

		    header('location: ../pag/Menu/menu.html');

        }else{

            echo "Campo invalido."."<br>";
            echo "<a href='../pag/log_card.html'>Voltar</a>";

        }
    }else{

        echo "Usuario não cadastrado."."<br>";
		echo "<a href='../pag/card_cad'>Cadastrar</a>";

    }
}
}
?>