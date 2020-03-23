<?php
	require_once('livros.class.php');
	$txt ="%{$_POST['txt']}%";
	$livros = new Livros();
	$pesquisa = $livros->pesquisa($txt);
	
?>