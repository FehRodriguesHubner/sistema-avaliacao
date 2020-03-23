<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo2.css">
		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.php"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="../view/cadastrar.php" >Cadastro</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<div class="box">
			  <img class="img" src="../img/platon.jpg">
			  
			  <div id="text">
				<h1>O mundo de platão</h1>
				<p>O Mundo de Platão proporciona uma visão abrangente do pensamento desse filósofo, que até hoje exerce fascínio sobre estudantes, 
				eruditos e o leitor em geral. Ele inclui uma introdução à sua vida e à sua época, a história de Atenas até os dias em que ele viveu,
				uma descrição dos filósofos pré-socráticos e um resumo de cada um dos diálogos de Platão. Um guia resumido de um dos maiores pensadores do mundo.</p>
			  </div>
			</div>
			
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="O mundo de platão"/>
				</form>
			</div>
			
		</section>
   </body>
</html>