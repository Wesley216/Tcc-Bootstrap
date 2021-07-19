<?php
require_once '../config/bd.php';

session_start();

if (!$_SESSION['id_cardapio']) {
    
    header('location: ../pag/Menu/menu.html');

}else{

    $sql = "select a.nome, a.bairro, a.rua, a.numero, p.espec, p.quant, p.tot from cad_combo a, pastel p where a.id = '$_SESSION[id_cardapio]' and p.id_cad_combo = '$_SESSION[id_cardapio]' order by p.id desc limit 1";

	$result = mysqli_query($lk, $sql);

    session_unset();
    session_destroy();

    if (!$result) {
        
        exit('Erro: '.mysqli_error($lk));

    }
}
?>