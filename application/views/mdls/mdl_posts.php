<div class="modal fade app-mdl" id="mdl-del-reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					<i class="fa fa-trash-alt"></i> Eliminando registro
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form class="form" method="post" id="form-del-reg" name="form-del-reg">
				<div class="modal-body">
					<div class="col-md-12 text-center" id="div-cnt-msg-del-reg"></div>
					<input type="hidden" id="txt-id-reg-del" name="txt-id-reg" readonly="" value="0">
					<input type="hidden" name="txt-action" value="delete-reg" readonly="">
					<input type="hidden" name="txt-act-reg" value="0" readonly="">
					<div class="row">
						<div class="col-md-12 text-center" id="div-cnt-del-reg">
							<h5>
								¿Está seguro de eliminar <b class="text-danger" id="txt-nom-reg"></b>?
							</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" id="btn-close-mdl-del-reg" class="btn btn-secondary" data-dismiss="modal">
						<i class="fa fa-times"></i>
						Cerrar
					</button>
					<button type="submit" class="btn btn-danger" id="btn-del-reg">
						<i class="fa fa-trash-alt"></i> Eliminar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="mdl-add-reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					<i class="fa fa-pencil"></i>
					Agregando registro
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form" id="form-add-reg" name="form-add-reg" enctype="multipart/form-data" accept-charset="UTF-8" role="form">
				<div class="modal-body">
					<div class="col-md-12 text-center" id="div-cnt-msg-add-reg"></div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="txt-nom-sec">Nombre</label>
							<input type="text" class="form-control" name="txt-nom-reg" id="txt-nom-reg" placeholder="Nombre" required="required" value="">
						</div>
						<div class="form-group col-md-6">
							<label for="txt-desc-reg">Descripción</label>
							<input type="text" class="form-control" name="txt-desc-reg" placeholder="Descripción" required="required" value="">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-close-mdl-add-reg" name="btn-close-form-add-reg">
						<i class="fa fa-times"></i> Cancelar
					</button>
					<button type="submit" class="btn btn-success" id="btn-add-reg" name="btn-add-reg">
						<i class="fa fa-check"></i> Agregar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>