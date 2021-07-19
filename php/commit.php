<?php
require_once '../config/bd.php';
require_once '../config/secu.php';

if (isset($_POST['comment']) && isset($_POST['star']) == 'comment'.'star') {

    $comit = catks ($_POST['comment']);

    $star = catks ($_POST['star']);

    $sql = "insert into commit(comment, star) values('$comit', '$star')";
        
    $result = mysqli_query($lk, $sql);
        
    if (!$sql) {

        exit('Erro: '.mysqli_error($lk));  
    
    }else{
        header('location: ../php/avaliação/sessment.php');
    }
}
?>