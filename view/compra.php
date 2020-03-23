<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.html">
			<img class="imgHeader" src="../img/mancada2.png" title="banner"/>
			</a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="#" >Conecte-se</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<h1 style="padding-left:10px;" >Compra concluída :) </h1>
			<p style="padding-left:10px;">   ->   Detalhes da compra: </p>
			
			<br/>
			<?php
				include('../controller/dadosDaCompra.php');
			?>
		</section>
   </body>
</html>