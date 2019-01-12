<?php
require 'contato.class.php';
$contato = new Contato();
if(isset($_GET['id'])){
	$id =  addslashes($_GET['id']);
}

$contato->excluir($id);
header('Location: index.php');
?>
