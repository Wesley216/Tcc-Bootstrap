<?php
require_once '../../config/bd.php';

$sql = "select * from commit";

$result = mysqli_query($lk, $sql);

if (!$result) {

    exit('Erro: '.mysqli_error($lk));

}
?>