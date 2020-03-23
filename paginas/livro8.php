<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo2.css">
		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.html"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
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
			  <img class="img" src="../img/oRomanticoIncuravel.jfif">
			  
			  <div id="text">
				<h1>O Romantico Incurável</h1>
				<p>Naquele dia, sem o saber, o dentista cometeu um erro fatal. Quando a sua paciente acordou da anestesia geral, pegou-lhe na mão para a tranquilizar.
				Megan, uma mulher casada, na casa dos 40, interpretou mal o gesto. Apaixonou-se, como se tivesse sido atingida por um raio. E ficou com a certeza absoluta 
				de que o seu amor era retribuído. O caso de Megan, em certo sentido, é uma história de amor. Mas os seus arrepiantes contornos mais fazem lembrar um thriller.
				Ela literalmente enlouquece de amor. E apesar de não ser recíproco, ninguém a convence do contrário.</p>
			  </div>
			</div>
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="O Romantico Incurável"/>
				</form>
			</div>
		</section>
   </body>
</html>