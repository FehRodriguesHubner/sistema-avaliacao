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
			  <img class="img" src="../img/oDiarioDaNossaPaixao.jfif">
			  
			  <div id="text">
				<h1>O diario da nossa paixão</h1>
				<p>Nicholas Sparks, o jovem autor deste inesperado bestseller, nunca esqueceu o ensinamento que a relação amorosa dos pais da sua mulher, 
				casados há mais de 62 anos, lhe transmitiu - a possibilidade de viver em estado de paixão mesmo depois de vários anos de convívio. 
				Foi por isso que decidiu escrever este comovente romance de amor que acompanha o enamoramento entre um homem e uma mulher, 
				que só no final das suas vidas concretizam uma paixão arrebatadora.</p>
			  </div>
			</div>
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="O diario da nossa paixão"/>
				</form>
			</div>
		</section>
   </body>
</html>