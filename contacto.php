
<?php
	include_once('inc/header.php');
?>


<!--Empieza el body-->

<body class="bg-secondary">

	<ul class="nav justify-content-center navbar navbar-dark bg-dark ">

		<a href="/index.html"><img src="/img/logo.png" alt=""> </a>
	</ul>

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

			<div class="col">
				<img src="/img/logo.png" alt="" class="img-fluid">
				<img
					src="https://image.freepik.com/vetores-gratis/aplicativos-de-midia-social-em-um-smartphone-midia-social-3d-isometrica_127544-341.jpg"
					alt="" class="img-fluid my-5">
			</div>

		</div>
	</div>

	<!--Cierra formulario-->
	<div class="container">
		<div class="row">
			<div class="col -2">
				<h1>Asd</h1>
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php
	include_once('inc/footer.php');
?>


	<!-- library -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>
</body>

</html>