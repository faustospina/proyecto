<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<h3>CONSULTORIO JURIDICO</h3>
				<p>proximamente la implementacion de un calendario para que no te pierdas nunca de tus audiencias...</p>
				<ul id="next-workshops">
					<li></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<h3>NO TE PIERDAS NUESTRAS NOVEDADES</h3>
				<form id="subscribe-form" action="">
					<div class="row">
						<div class="col-xs-7 col-sm-8">
							<div class="form-group">
								<label class="sr-only" for="email">tu correo electrónico</label>
								<input type="text" id="email" name="email" class="form-control input-lg" placeholder="tu correo electrónico">
							</div>
						</div>
						<div class="col-xs-5 col-sm-4">
							<button class="btn btn-custom btn-lg">SUSCRIBIRME</button>
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-5">
				<h3>SOBRE NUESTRA PAGINA</h3>
				<p>Ofrecemos una interfaz amigable y lo guiamos en el proceso para la estructuracion de la informacion necesaria para que inicie su proceso juridico sin perdida de informacion, con asociaciones relacionadas por cada involucrado en el proceso.</p>
				<p>Una apuesta diferente al panorama formativo de programas convencionales como excell y otras plataformas en donde la informacion esta desordenada y no tiene ninguna relacion. </p>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<h3>TE GUSTA? CORRE LA VOZ</h3>
				<p>Si te gusta esta filosofía de almacenamiento de la informacion o has utilizado nuestra pagina y te hemos convencido, ayúdanos a promocionarlos por Internet para que otros puedan disfrutar de ellos:</p>
				<!-- Insertar addthis -->
			</div>
		</div>
	</div>
</footer>


<script>
	function toggleMobileMenu() 
	{
		var $mobileMenu = $('#mobile-main-menu');	
		$mobileMenu.slideToggle('fast');
	}

	$(document).ready(function() {
		$('#mobile-menu-button').on('click', toggleMobileMenu);
	});
</script>