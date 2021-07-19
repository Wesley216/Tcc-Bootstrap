<?php  
require_once '../config/bd.php';

function catks($input){

	global $lk;

	$res = mysqli_escape_string($lk, $input);

	$res = htmlspecialchars($res);

	return $res;
}
?>