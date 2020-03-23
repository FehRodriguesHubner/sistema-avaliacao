<?php
	require('../model/conexao.php');
	Class livros extends conexao{
		private $nome;
		private $desc;
		private $valor;
		private $genero;
		protected $tabela = 'livros';
		
		public function getNome(){
			return $this->nome;
		}
		public function getDesc(){
			return $this->desc;
		}
		public function getValor(){
			return $this->valor;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setNome($a){
			$this->nome = $a;
		}
		public function setDesc($a){
			$this->desc = $a;
		}
		public function setValor($a){
			$this->valor = $a;
		}
		public function setGenero($a){
			$this->genero = $a;
		}
		
		public function pesquisa($txt){
			$sql = "SELECT nome,valor,ref,imgRef FROM $this->tabela
				WHERE nome like ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('s',$txt);
			$stmt->execute();
			$stmt->store_result();
			if($stmt->num_rows > 0){
				$stmt->bind_result($nome,$valor,$ref,$imgRef);
				while($stmt->fetch()){
					echo '<a href="'.$ref.'" alt="Livro">
								<div class="boxItem">
										<div>
											<p class="center"><img src="../'.$imgRef.'" class="img" alt="capa do livro"></p>
											<div class="card-body">
												<p class="card-text">'. mb_strimwidth($nome, 0, 20, '...').'</p>
												<br/>
												<p class="card-text" style="color:green;text-align:right;font-size:18pt;">R$'.number_format($valor,2,',','.').'</p>
											</div>
										</div>
								</div>
							</a>';
				}
			
			}else{
				echo"Nenhum resultado encontrado.";
			}
			$stmt->close();
			$this->conn->close();
		}
		
		
		
		public function cadastro($nome,$valor,$ref,$imgRef){
			
				$sql = "INSERT INTO livros(codigo,nome,valor,ref,imgRef)values(null,?,?,?,?)";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param('sdss',$nome,$valor,$ref,$imgRef);
				$stmt->execute();
				if($stmt == true){
					echo "Gravado com sucesso";
				}else{
					die("Falha no cadastro!");
				}
				$stmt->close();
				$this->conn->close();
			
			
			
		}
		public function comprar($email,$name,$adress,$city,$estado,$cep,$livro){
			$sql = "INSERT INTO encomendas(codigo,email,nome,endereco,cidade,estado,cep,nome_livro)values(null,?,?,?,?,?,?,?)";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param('sssssss',$email,$name,$adress,$city,$estado,$cep,$livro);
				$stmt->execute();
				if($stmt == true){
					echo "		<table style='padding-left:50px;'>
									<tbody>
									<th>Nome:</td>
									<td>".$name."</td>
								  </tr>
								  <tr>
									<th>Email</th>
									<td>".$email."</td>
									
								  </tr>
								  <tr>
									<th>Endereço</th>
									<td>".$adress." ".$city." ".$estado."</td>
									
								  </tr>
								  <tr>
									<th>Livro</th>
									<td>".$livro."</td>
								  </tr>
								 
									</tbody>
								</table>";
				}else{
					die("Falha na compra, tente novamente mais tarde!");
				}
		}
		
	
	}

?>