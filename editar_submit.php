<?php
require 'contato.class.php';

$contato = new Contato();

if(isset($_POST['id'])){
	$nome = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];

	$contato->editar($nome, $email, $id);

	header('Location: index.php');

}




?>