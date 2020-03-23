<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.html"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="cadastrar.php" >Cadastro</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<h1 >Resultados:</h1>
			<br/>
			<?php
				if(isset($_POST['submit'])){
					require_once('../controller/livros.class.php');
					$txt ="%{$_POST['txt']}%";
					$livros = new Livros();
					$pesquisa = $livros->pesquisa($txt);
				}
			?>
		</section>
   </body>
</html>