<?php  
require_once '../config/bd.php';

session_start();

if (!isset($_SESSION['id_pedido'])) {
	
	header('location: ../pag/delivery.html');

}else{

$sql = "select c.nome, c.rua, c.bairro, p.tam, p.tipo_pizza from cad_dev c, pedidos p where c.id = '$_SESSION[id_pedido]' and p.id_cad_dev = '$_SESSION[id_pedido]' order by p.id desc limit 1";

    $resulta = mysqli_query($lk, $sql);

    if (!$resulta) {
    	
    	die ("Erro: ".mysqli_error($lk));
    }
}
?>