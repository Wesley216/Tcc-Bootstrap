<?php
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_cardapio']) {
    
    header('location: ../../pag/log_card.html');

}else{

if (isset($_POST['espec']) && isset($_POST['qtd']) == 'espec'.'qtd') {
    
    $especialidade = catks($_POST['espec']);
    $quantidade = catks($_POST['qtd']);

    $sum = $quantidade * 6.00;
    
    
    $sql = "insert into pastel(espec, quant, tot, id_cad_combo) values('$especialidade', '$quantidade', '$sum', '$_SESSION[id_cardapio]')";

    $res = mysqli_query($lk, $sql);

    if (!$res) {

        exit('Erro: '.mysqli_error($lk));
    
    }else{

        header('location: ../../php/result pastel.php');
    }

}elseif(isset($_POST['quant']) && isset($_POST['espec']) == 'quant'.'espec'){
    
    $especialidade = catks($_POST['espec']);
    $quant = catks($_POST['quant']);

    $som = $quant * 7.50;

    $sql2 = "insert into pastel(espec, quant, tot, id_cad_combo) values('$especialidade', '$quant', '$som', '$_SESSION[id_cardapio]')";

    $resulta = mysqli_query($lk, $sql2);

    if (!$resulta) {

         exit('Erro: '.mysqli_error($lk));

    }else{
        
        header('location: ../../php/result pastel.php');
    }
}
}
?>