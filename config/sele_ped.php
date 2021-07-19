<?php
require_once '../config/bd.php';

session_start();

if (!$_SESSION['id_cardapio']) {

    header('location: ../pag/Menu/menu.html');

}else{

//MOSTRA OS PEDIDOS DO CARDAPIO

$sql = "select a.nome, a.bairro, a.rua, a.numero, c.tipo, c.tipo_pizza from cad_combo a, cardapio c where a.id = '$_SESSION[id_cardapio]' and c.id_cad_combo = '$_SESSION[id_cardapio]' order by c.id desc limit 1";

$result = mysqli_query($lk, $sql);

//MOSTRA OS PEDIDOS DA SOBREMESA

$sql1 = "select a.nome, a.bairro, a.rua, a.numero, s.tipo_sobremesa, s.sobremesa from cad_combo a, sobremesa s where a.id = '$_SESSION[id_cardapio]' and s.id_cad_combo = '$_SESSION[id_cardapio]' order by s.id desc limit 1";

$resulta = mysqli_query($lk, $sql1);

//MOSTRA OS PEDIDOS DAS ESPECIALIDADES

$sql2 = "select a.nome, a.bairro, a.rua, a.numero, e.tipo_especial, e.espece from cad_combo a, especialidade e where a.id = '$_SESSION[id_cardapio]' and e.id_cad_combo = '$_SESSION[id_cardapio]' order by e.id desc limit 1";

$res = mysqli_query($lk, $sql2);

//MOSTRA OS PEDIDOS DA BATATA ROSTI

$sql3 = "select a.nome, a.bairro, a.rua, a.numero, b.tipo_batata, b.batata from cad_combo a, batata b where a.id = '$_SESSION[id_cardapio]' and b.id_cad_combo = '$_SESSION[id_cardapio]' order by b.id desc limit 1";

$resul = mysqli_query($lk, $sql3);

session_unset();
session_destroy();

if(!$result && !$resulta && !$res && !$resul){

    exit('Erro: '.mysqli_error($lk));
    
}
}
?>