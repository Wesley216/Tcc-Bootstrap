<?php
require_once '../../config/bd.php';
session_start();

if (!isset($_SESSION['id_cardapio'])) {

    header('location: ../../index.html');
    
}else{

    $sql = "select produto, valor from carrinho where id = '$_SESSION[id_cardapio]' and id_cad_combo = '$_SESSION[id_cardapio]'";

    $res = mysqli_query($lk, $sql);

    if (!$res) {

        exit('Erro: '.mysqli_error($lk));

    }

}
?>