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
			  <img class="img" src="../img/gato.png">
			  
			  <div id="text">
				<h1>Como saber se seu gato está planejando matar você</h1>
				<p>Aquele ser felpudo que gosta de afiar as unhas no seu sofá pode até parecer um gatinho inofensivo.
				Na cabeça dele, porém, é um felino altamente perigoso. É uma pantera, um tigre, um enorme leão-da-montanha! 
				Seu gato gosta de pular na sua cama de manhã, acordando você bem cedinho para fazer massagem na sua barriga?
				Encontrará aqui uma maneira divertida de compreender a mente desse felino tão misterioso.</p>
			  </div>
			</div>
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="Como saber se seu gato..."/>
				</form>
			</div>
		</section>
   </body>
</html>