<?php
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_promo']) {
    
    header('location: ../../pag/Promoção/Logs/log_promo.html');

}else{

if (isset($_POST['tipo_promo']) && isset($_POST['promo']) == 'tipo_promo'.'promo') {
    
    $tipo = catks ($_POST['tipo_promo']);
    $promo = catks ($_POST['promo']);

    $sql = "insert into promo(tipo_promo, promo, id_cad_combo) values('$tipo', '$promo', '$_SESSION[id_promo]')";

    $result = mysqli_query($lk, $sql);

    if (!$result) {
        
        exit('Erro: '.mysqli_error($lk));

    }else {

        header('location: ../../php/result promo.php');;
    }

}
}
?>