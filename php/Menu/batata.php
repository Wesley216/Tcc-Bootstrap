<?php
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_cardapio']) {
    
    header('location: ../../pag/log_card.html');

}else{

if (isset($_POST['tipo_batata']) && isset($_POST['batata']) == 'tipo_batata'.'batata') {
    
    $tipo = catks ($_POST['tipo_batata']);
    $bata = catks ($_POST['batata']);

    $sql = "insert into batata(tipo_batata, batata, id_cad_combo) values('$tipo', '$bata', '$_SESSION[id_cardapio]')";

    $result = mysqli_query($lk, $sql);

    if (!$result) {

        exit('Erro: '.mysqli_error($lk));
    
    }else{

        header('location: ../../php/result cardapio.php');
    }
}
}
?>