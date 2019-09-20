<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?=base_url();?>">
			<img src="assets/app/images/logo_navbar.svg" id="logo_custom"  alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="https://linuxitos.com/blog/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://linuxitos.com/blog/servicios">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://linuxitos.com/blog/contacto">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
					<div class="dropdown-menu" aria-labelledby="dropdown06">
						<a class="dropdown-item" href="<?=base_url();?>paginate">Paginación con AJAX</a>
						<a class="dropdown-item" href="<?=base_url();?>main">Pagonación con AJAX en tablas</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>