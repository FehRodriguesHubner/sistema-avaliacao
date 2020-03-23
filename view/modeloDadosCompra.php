			<h2>Compre uma cópia física deste livro</h2>
			<br/>
			<p class="buy">Enviaremos uma cópia nova, para sua casa pelos correios, super bem embalada e o mais rápido possível.</p>
			<br/>
			 <form style="width:50%;padding-left:30px;" action="../view/compra.php" method="post">
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Informe seu e-mail</label>
						  <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Informe seu nome</label>
						  <input type="text" class="form-control" id="inputPassword4" name="name" placeholder="Nome e sobrenome">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputAddress">Informe o endereço da entrega</label>
						<input type="text" class="form-control" id="inputAddress" name="adress" placeholder="Bairro, Rua e ap/nº">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputCity">Cidade</label>
						  <input type="text" class="form-control" name="city" id="inputCity" placeholder="Ex:Porto Alegre">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputState">Estado</label>
						  <select id="inputState" name="select" class="form-control">
							<option selected>Selecione...</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
						  </select>
						</div>
						<div class="form-group col-md-2">
							
						  <label for="inputZip">CEP</label>
						  <input type="text" name ="cep" class="form-control" id="inputZip">
						</div>
					  </div>
					  <button style="background-color:green;" type="submit" class="btn btn-primary">Comprar</button>
					