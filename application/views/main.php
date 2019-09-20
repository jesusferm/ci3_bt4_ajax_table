<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type='text/javascript'>
var base_url = "<?php echo base_url();?>";
</script>
<div id="container" class="container mt-5">
	<div class="row">
		<div class="col-md-12 mt-4">
			<h2 class="mt-2 mb-3 text-center">Paginación en tablas utilizando AJAX, CodeIgniter 3.1.10 & Bootstrap 4.3.1!</h2>
		</div>
	</div>
	<div class="row mt-3 mb-3">
		<div class="col-12">
			<p>
				Siguiendo con los ejemplos con ajax, codeigniter 3.1.10 y bootstrap 4.3.1. En ésta ocasión les traigo paginación en tablas utilizando ajax, así como las funciones de ordenamiento, filtrado, seleccionando el total a mostrar y búsqueda de registros.
			</p>
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

<script src="<?php echo base_url();?>assets/app/ajax/ajxtablepage.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		load(0);
	});
</script>