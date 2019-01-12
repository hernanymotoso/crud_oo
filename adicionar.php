<?php
require 'contato.class.php';
$contato = new Contato();
?>
<form method="POST">
	Nome<br/><br/>
	<input type="text" name="name" placeholder="Nome" /><br/><br/>

	E-mail<br/><br/>
	<input type="text" name="email" placeholder="E-mail" required><br/><br/>

	<input type="submit" vlaue="Adicionar">
</form>

<?php
	if(isset($_POST["email"])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$contato->adicionar($email, $nome);

		header('Location: index.php');

	}
?>