<!-- HEADER -->
<?php 
include "include/header.php";
?>

<!-- CONTEUDO -->
<section id="breadcrumb" class="bg-bc-blue">
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
					<div class="row">
						<div class="col-lg-12">
							<label for="nameInput" class="control-label">Nome*</label>
							<input class="big-input" type="text" placeholder="Digite seu nome..." id="nameInput">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<label for="orgaoInput">Órgão-Departamento</label>
							<input class="big-input" type="text" id="orgaoInput">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<label for="emailInput">E-mail</label>
							<input class="big-input" type="text" placeholder="Digite seu email..." id="emailInput"> 
						</div>

						<div class="col-lg-6">
							<label for="telInput">Telefone*</label>
							<input class="big-input" type="text" placeholder="(00)0 0000-0000" id="telInput">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<label for="msgInput">Mensagem</label>
							<input class="big-input" type="text" id="msgInput">
						</div>
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
			<div class="row">
				<div class="col-lg-3">
					<div class="title-info">
						<h2 >NOSSA 
							<span>LOCALIZAÇÃO</span>
						</h2>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="map-border">
					<div id="map""></div>


					</div>
				</div>
			</div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCQKAJR32MRymYnPD320hAJr3kutI6agU&callback=initMap">  </script>
<script>
	$(function () {

		function initMap() {

			var location = new google.maps.LatLng(-23.466702, -46.520336);

			var mapCanvas = document.getElementById('map');
			var mapOptions = {
				center: location,
				zoom: 16,
				panControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			}

			var map = new google.maps.Map(mapCanvas, mapOptions);

			var markerImage = '../images/map-marker.png';

			var marker = new google.maps.Marker({
				position: location,
				map: map,
				icon: markerImage
			});

			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<div id="bodyContent">'+
			'<p>Rua do Rosário, 226 - Vila Camargos <br>' +
			' Guarulhos - São Paulo - 07111-080' +
			'</p>'+
			'</div>'+
			'</div>';

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});


			marker.addListener('click', function () {
				infowindow.open(map, marker);
			});
		}

		google.maps.event.addDomListener(window, 'load', initMap);
	});
</script>

</body>
</html>