<!-- HEADER -->
<?php 
include "include/header.php";
?>

<!-- CONTEUDO -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Página inicial</a></li>
			<li class="breadcrumb-item active">FALE CONOSCO</li>
		</ol>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="contact-form">
				<h1>DEIXE SUA</h1><br> 
				<span>MENSAGEM</span>

				<p>
					Para tirar suas dúvidas, fazer comentários ou dar sua
					opinião sobre o <b>IPREF</b>, utilize o formulário abaixo ou use um dos nossos meios:
				</p>


				<form class="form-inline">
					<div class="form-field">
						<label for="nameInput" class="control-label">Nome*</label>
						<input class="big-input" type="text" placeholder="Digite seu nome..." id="nameInput">
					</div>

					<div class="form-field">
						<label for="orgaoInput">Órgão-Departamento</label>
						<input class="big-input" type="text" id="orgaoInput">
					</div>

					
					<div class="form-field">
						<label for="emailInput">E-mail</label>
						<input class="short-input" type="text" placeholder="Digite seu email..." id="emailInput"> 
					</div>

					<div class="form-field">
						<label for="telInput">Telefone*</label>
						<input class="short-input" type="text" placeholder="(00)0 0000-0000" id="telInput">
					</div>

					<div class="form-field">
						<label for="msgInput">Mensagem</label>
						<input class="big-input" type="text" id="msgInput">
					</div>

					<button type="submit" class="btn-submit">Enviar mensagem</button>
				</form>
			</div>
		</div>


		<div class="col-lg-6">
			<div id="bg-contato-inner"></div>
			<div class="contact-info">
				<div class="adress">
					<p>
						<i class="icon icon-map-cordinate"></i>
						<a href="#">
							Rua do Rosário, 226 - Vila Camargos
							Guarulhos - São Paulo - 07111-080
						</a>
					</p>
				</div>

				<div class="telefone">
					<p>
						<i class="icon icon-tel-footer"></i>
						<a href="#">
							Tel. <b>(11) 2461-6363</b>
						</a>
					</p>

				</div>

				<div class="op-hours">
					<p>
						<i class="icon icon-schedule-footer"></i>
						<a href="#">
							Horário de Atendimento das<br>
							<b>8h às 16h30</b>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="contact-form contact-map">
		<h1 id="location-title">NOSSA</h1><br> 
			<span>LOCALIZAÇÃO</span>
		</div>
	</div>

</div>
<!-- FOOTER -->
<?php 
include "include/footer.php";
?>

<!-- JS ALL PAGES -->
<?php 
include "include/js.php";
?>

</body>
</html>