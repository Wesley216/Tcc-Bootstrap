<?php
require_once '../../config/bd.php';
require_once '../../config/atk.php';

session_start();

if (!$_SESSION['id_cardapio']) {
    
    header('location: ../../pag/log_card.html');

}else{

if (isset($_POST['tipo_especial']) && isset($_POST['espece']) == 'tipo_especial'.'espece') {
    
    $tipo = catks ($_POST['tipo_especial']);
    $especialidade = catks($_POST['espece']);
    
    $sql = "insert into especialidade(espece, tipo_especial, id_cad_combo) values('$especialidade',  '$tipo','$_SESSION[id_cardapio]')";

    $result = mysqli_query($lk, $sql);

    if (!$result) {

        exit('Erro: '.mysqli_error($lk));
    
    }else{
        
        header('location: ../../php/result cardapio.php');
    }
}
}
?>