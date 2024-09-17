<!DOCTYPE html>
<?php include_once('includes/header.inc.php');
	  include_once('includes/menu.inc.php');
?>
		<!-- BANNER SLIDER -->

		<div class="slider">
			<ul class="slides">
				<li>
					<img src="_img/coliseu1.jpg">
					<div class="caption left-align">
						<h4>Americans</h4>
						<h5>Have you italian ancestors?  <br>This is for you.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
				<li>
					<img src="_img/hotel-banner-2.jpg" alt="">
					<div class="caption black-text center-align">
						<h4>Europe</h4>
						<h5>Do you want know more about that? <br>This is an oportunity.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
				<li>
					<img src="_img/hotel-banner-3.jpg" alt="">
					<div class="caption right-align">
						<h4>Enterprises</h4>
						<h5>If you are projeting open a filial in Europe, <br>contact us.</h5>
						<a href="" class="btn teal">learn more</a>
					</div>
				</li>
			</ul>
		</div>
	

	<div class="row"><p>&nbsp;</p></div>

	<!-- ARTICLES -->

	<div class="row container">
		<div class="col s12 grey-text center"><h4>Countries</h4><p>&nbsp;</p></div>

		<article class="col s12 center">
			<img src="_img/europe.png" class="reaponsive-img">
			<h5>Europe</h5>
			<p>This is the europe countries.</p>
			<a href="" class="btn teal">More</a><br><br>
		</article>
<!--
		<article class="col s12 l4 center hoverable">
			<img src="_img/hotel-rio.jpg" class="circle reaponsive-img">
			<h5>Hotel RJ</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="" class="btn teal">ler mais</a><br><br>
		</article>

		<article class="col s12 l4 center hoverable">
			<img src="_img/hotel-ceara.jpg" class="circle reaponsive-img">
			<h5>Hotel Ceará</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="" class="btn teal">ler mais</a><br><br>
		</article>

-->
	</div>

	<!-- PARALLAX -->
	<div class="parallax-container">
		<div class="parallax">
			<img src="_img/imagem-parallax.jpg" alt="">
		</div>
	</div>

	<div class="row"><p>&nbsp;</p></div>

	<!-- TEXTO -->
	<div class="row container">
		<div class="col s12">
			<h5>Americans</h5>
			<p>
			Americanos: Que tiveram antepassados que imigraram da Italia para os EUA e desejam adquirir a cidadania, seja para investir na Europa, seja para viver e/ou trabalhar. 
			Empresas: Focadas em oportunidades de negócios, com necessidades específicas em termos de vistos de trabalho e transferência de funcionários.
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde minus nostrum aperiam ipsa perferendis quaerat, debitis at laborum fuga temporibus? Perferendis sunt, praesentium quaerat earum reprehenderit ipsum optio, quas eveniet?
			</p>

			<br><hr><br>

			<h5>HNWIs</h5>
			<blockquote>
				<p>
				Indivíduos de alto patrimônio líquido, com expectativas elevadas em relação à personalização e eficiência.
				</p>
			</blockquote>
			<blockquote>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio delectus obcaecati sint optio blanditiis, soluta eaque, illo cupiditate et ad reiciendis labore veritatis, porro quod expedita similique sed adipisci aliquid.
				</p>
			</blockquote>
		</div>
	</div>

	<br><hr><br>

	<!-- CARDS LIGHTBOX-->
	<div class="row container">
		<div class="col s12 center grey-text">
			<h5>Pacotes Especiais</h5>
		</div>
		<!-- CARD LIGHTBOX 1 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-1.jpg" class="responsive-img materialboxed" data-caption="Especial de Natal">
					<span class="card-title">Especial de Natal</span><br>
				</div>
				<div class="card-content">
					
					<p>
						<strong>R$580,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#modalNatal" class="modal-trigger">reservar</a></div>
				<div class="modal" id="modalNatal">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Especial Natal">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div><!-- FIM DO PRIMEIRO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 2 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-2.jpg" class="responsive-img materialboxed" data-caption="Pacote Plus">
					<span class="card-title">Pacote Plus</span><br>
				</div>
				<div class="card-content">
					<p>
						<strong>R$750,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacotePlus" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacotePlus">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Plus">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO SEGUNDO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 3 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-3.jpg" class="responsive-img materialboxed" data-caption="Lua de Mel">
					<span class="card-title">Lua de Mel</span><br>
				</div>
				<div class="card-content">
					<p>
						<strong>R$940,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#luaDeMel" class="modal-trigger">reservar</a></div>
				<div class="modal" id="luaDeMel">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Lua de Mel">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO TERCEIRO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 4 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-4.jpg" class="responsive-img materialboxed" data-caption="Pacote Master">
				</div>
				<div class="card-content">
					<span class="card-title">Pacote Master</span><br>
					<p>
						<strong>R$750,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacoteMaster" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacoteMaster">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Master">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO QUARTO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 5 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-5.jpg" class="responsive-img materialboxed" data-caption="Especial Reveillon">
				</div>
				<div class="card-content">
					<span class="card-title">Especial Reveillon</span><br>
					<p>
						<strong>R$1.200,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#especialReveillon" class="modal-trigger">reservar</a></div>
				<div class="modal" id="especialReveillon">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Especial Reveillon">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO QUINTO CARD LIGHTBOX -->

		<!-- CARD LIGHTBOX 6 -->
		<div class="col s12 l4">
			<div class="card">
				<div class="card-image">
					<img src="_img/lightbox-6.jpg" class="responsive-img materialboxed" data-caption="Pacote Diamante">
				</div>
				<div class="card-content">
					<span class="card-title">Pacote Diamante</span><br>
					<p>
						<strong>1.150,00</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam consequatur, ratione.
					</p>
				</div>
				<div class="card-action"><a href="#pacoteDiamante" class="modal-trigger">reservar</a></div>
				<div class="modal" id="pacoteDiamante">
					<div class="modal-content">
							<form action="reservas.php" method="post">
								<fieldset class="col s12">
									<legend><h5>Dados Pessoais</h5></legend>
									<div class="input-field col s12">
										<input type="text" name="nomePacote" class="validate ocultar" value="Pacote Diamante">
									</div>
									<div class="input-field col s12 m6">
										<label for="nome">Seu Nome</label>
										<input type="text" name="nome" class="validate" id="nome" required autofocus>
									</div>
									<div class="input-field col s12 m6">
										<label for="telefone">Seu Telefone</label>
										<input type="tel" name="telefone" class="validate" id="telefone" required>
									</div>
									<div class="col s12"><p>Selecione as datas de entrada e saída</p></div>
									<div class="input-field col s12 m6">
										<input type="date" name="entrada" class="validate" id="entrada" required>
									</div>
									<div class="input-field col s12 m6">
										<input type="date" name="saida" class="validate" id="saida" required>
									</div>
									<div class="input-field col s12">
										<label for="email">Seu Email</label>
										<input type="email" name="email" class="validate" id="email" required>
									</div>

									<!-- BOTÕES DE VALIDAÇÃO -->
									<button class="btn blue lighten-2" type="submit">enviar</button>
									<button class="btn green lighten-2" type="reset">limpar</button><br><br>
								</fieldset>
							</form>
							<br>&nbsp;<br>
					</div>
				</div>
			</div>
		</div><!-- FIM DO SEXTO CARD LIGHTBOX -->

	</div><!-- FIM DOS CARDS LIGHTBOX -->

	<?php include_once('includes/footer.inc.php');
?>