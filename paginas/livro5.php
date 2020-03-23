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
			  <img class="img" src="../img/AmorParaCorajosos.jfif">
			  
			  <div id="text">
				<h1>Amor Para Corajosos</h1>
				<p>'O poeta Vinícius de Moraes ensinava a amar 'porque não há nada melhor para a saúde que um amor correspondido'. Se não há nada mais importante do que amar, 
				pensar o amor em suas diversas formas e vínculos é fundamental. Em Amor para corajosos, o filósofo Luiz Felipe Pondé conduz o leitor por um passeio sobre o tema.
				Não se trata de um manual para amar melhor ou um estudo acadêmico. Na sua tradicional prosa ao mesmo tempo provocativa e elucidativa, Pondé escreve uma série de ensaios
				que podem ser lidos aleatoriamente ou na ordem sugerida.</p>
			  </div>
			</div>
			
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="Amor Para Corajosos"/>
				</form>
			</div>
			
		</section>
   </body>
</html>