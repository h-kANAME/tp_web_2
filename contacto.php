
<?php
	include_once('inc/header.php');
?>

	<!--Arranca formulario-->
	<div class="container bg-dark mb-3 my-3 cardMainColor">
		<h1 class="col">Contáctanos!</h1>
		<div class="row">
			<div class="col-md-8">
				<div class="well well-sm">
					<form class="form-horizontal" method="post">
						<fieldset>
							<div class="form-group">
								<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
								<div class="col-md-8">
									<input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
								<div class="col-md-8">
									<input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
								<div class="col-md-8">
									<input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
								<div class="col-md-8">
									<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
								<div class="col-md-8">
									<textarea class="form-control" id="message" name="message"
										placeholder="Enter your massage for us here. We will get back to you within 2 business days."
										rows="7"></textarea>
								</div>
							</div>
						</fieldset>

						<div class="col">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
								<?php
									require_once('inc/filtros.php');
							  ?>
					</div>
					</div>
	</div>


	<!-- Footer -->
<?php
	include_once('inc/footer.php');
?>

</html>