<?php
require_once '../../../config/bd.php';
require_once '../../../config/atk1.php';

session_start();

if (isset($_POST['nome']) && isset($_POST['tel']) && isset($_POST['bair']) && isset($_POST['rua']) && isset($_POST['num']) == 'nome'.'tel'.'bair'.'rua'.'num') {
   
    $nome = catks ($_POST['nome']);
    $tel = catks ($_POST['tel']);
    $bairro = catks ($_POST['bair']);
    $rua = catks ($_POST['rua']);
    $numero = catks ($_POST['num']);

    if (!is_string($_POST['nome']) || is_numeric($_POST['nome']) || empty($_POST['nome']) && empty($_POST['rua']) && !is_numeric($_POST['tel']) || empty($_POST['tel']) && !is_string($_POST['bair']) || is_numeric($_POST['bair']) || empty($_POST['bair']) && empty($_POST['num'])){

        echo "Preencha os campos corretamente."."<br>";
		echo "<a href='../../../pag/Combo/Login/combo_top.html'>Voltar</a>";

    }else{

    $sql = "select * from cad_combo where nome = '$nome'";

    $result = mysqli_query($lk, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        $sql1 = "select * from cad_combo where nome = '$nome' and tel = '$tel' and bairro = '$bairro' and rua = '$rua' and numero = '$numero'";

        $res = mysqli_query($lk, $sql1);

        if (mysqli_num_rows($res) == 1) {
            
            $date = mysqli_fetch_array($res);

            $_SESSION['combo'] = true;

            $_SESSION['id_combo'] = $date['id'];

            header('location: ../../../pag/Combo/combo top.html');

        }else{

            echo "Campo inválido."."<br>";
            echo "<a href='../../../pag/Combo/Login/combo_top.html'>Voltar</a>";
        }

    }else{

        echo "Usaurio nao cadastrado."."<br>";
		echo "<a href='../../../pag/Combo/Login/cad_top.html'>Cadastrar</a>";

    }
}
}
?>