<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type='text/javascript'>
var base_url = "<?php echo base_url();?>";
</script>
<div id="container" class="container mt-5">
	<div class="row">
		<div class="col-md-12 mt-5">
			<h1 class="mt-3 mb-3 text-center">Paginación con AJAX uitlizando Bootstrap 4.3.1 y Codeigniter!</h1>
			<p class="text-center">En éste ejemplo verán paginación con ajax</p>
			<p>En éste ejemplo les comparto un forma de realizar paginación con ajax, utilizando codeginiter y bootstrap 4.</p>
			<p>El ejemplo incluye obviamente todo el código y también la base de datos que se utiliza para ello.</p>
		</div>
	</div>
	<div class="row mt-3 mb-3">
		<div class="col-6">
			<a class="btn btn-primary btn-block" href="https://getbootstrap.com" target="_blank">
				<i class="fab fa-bootstrap"></i> Bootstrap
			</a>
		</div>
		<div class="col-6">
			<a class="btn btn-primary btn-block" href="https://www.codeigniter.com" target="_blank">
				<i class="fab fa-free-code-camp"></i> Codeigniter
			</a>
		</div>
	</div>

	<!-- content ajax load pagination -->
	<div id="div-cnt-ajax" class="row"></div>
	<div class="row mt-3">
		<div class="col-md-12 mb-4">
			<div id="pag-temas"></div>
		</div>
	</div>
	<!-- /content ajax load pagination -->
</div>

<script src="<?php echo base_url();?>assets/app/ajax/ajxfuctloadexmp.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		load(0);
	});
</script>