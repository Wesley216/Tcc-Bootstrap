<?php
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_cardapio']) {
    
    header('location: ../../pag/log_card.html');

}else{

if (isset($_POST['tipo_sobremesa']) && isset($_POST['sobremesa']) == 'tipo_sobremesa'.'sobremesa') {
    
    $tipo = catks ($_POST['tipo_sobremesa']);
    $sobre = catks($_POST['sobremesa']);

    $sql = "insert into sobremesa(sobremesa, tipo_sobremesa, id_cad_combo) values('$sobre', '$tipo', '$_SESSION[id_cardapio]')";

    $result = mysqli_query($lk, $sql);

    if (!$result) {

        exit('Erro: '.mysqli_error($lk));
    
    }else{

        header('location: ../../php/result cardapio.php');
    }

}
}
?>