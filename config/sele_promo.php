<?php
require_once '../config/bd.php';

session_start();

if (!$_SESSION['id_promo']) {
    
    header('location: ../index.html');

}else{

    $sql = "select a.nome, a.bairro, a.rua, a.numero, p.promo, p.tipo_promo from cad_combo a, promo p where a.id = '$_SESSION[id_promo]' and p.id_cad_combo = '$_SESSION[id_promo]' order by p.id desc limit 1";

	$result = mysqli_query($lk, $sql);

    session_unset();
    session_destroy();

    if (!$result) {
        
        exit('Erro: '.mysqli_error($lk));

    }
}
?>