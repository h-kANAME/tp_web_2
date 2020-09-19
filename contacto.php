
<?php
	include_once('inc/barra_navegacion.php');
?>
		<header>
        <h2 class="text-dark text-center py-4">Contacto</h2>
        </header>
	<!--Arranca formulario-->
	
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Dejanos tu contacto y un mensaje.</p>
	<div class="container py-4">
	<div class="row">

<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5">
	<form id="contact-form" name="contact-form" action="mail.php" method="POST">

		<!--Grid row-->
		<div class="row">

			<!--Grid column-->
			<div class="col-md-6">
				<div class="md-form mb-0">
				<label for="name" class="">Nombre</label>
					<input type="text" id="name" name="name" class="form-control">
					
				</div>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6">
				<div class="md-form mb-0">
				<label for="email" class="">E-mail</label>
					<input type="text" id="email" name="email" class="form-control">
					
				</div>
			</div>
			<!--Grid column-->

		</div>
		<!--Grid row-->

		<!--Grid row-->
		
		<!--Grid row-->

		<!--Grid row-->
		<div class="row">

			<!--Grid column-->
			<div class="col-md-12 py-4">

				<div class="md-form">
				<label for="message">Mensaje</label>
					<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>	
				</div>
			</div>
		</div>
		<!--Grid row-->

	</form>

	<div class="text-center text-md-left">
		<a class="btn btn-dark" onclick="document.getElementById('contact-form').submit();">Send</a>
	</div>
	<div class="status"></div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 text-center">
	<ul class="list-unstyled mb-0">
		<li><i class="fas fa-map-marker-alt fa-2x"></i>
			<p>Calle Ejemplo, Buenos Aires</p>
		</li>

		<li><i class="fas fa-phone mt-4 fa-2x"></i>
			<p>1111111111</p>
		</li>

		<li><i class="fas fa-envelope mt-4 fa-2x"></i>
			<p>tecnologiaber@gmail.com</p>
		</li>
	</ul>

<div class="embed-responsive embed-responsive-16by9 mt-4">
            <iframe class="Tam-Mapa"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.2134632117186!2d-58.44987668477179!3d-34.548150280474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb430eb81d897%3A0x2b2734e28b6a8646!2sAMPARO%20MATERNAL!5e0!3m2!1ses!2sar!4v1594331630111!5m2!1ses!2sar"
              frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
<!--Grid column-->
</div>
</div>


	</div>


</section>
<!--Section: Contact v.2-->



	<!-- Footer -->
<?php
	include_once('inc/footer.php');
?>

</html>