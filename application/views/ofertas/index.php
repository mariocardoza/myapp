<div class="panel panel-primary">
		<div class="panel-heading">Registro de ofertas </div>
		<div class="panel-body">
		<form action="" id="oferta">
		<div class="col-sm-4 b-r">
		<label for="">Seleccione un Proyecto: </label>
		<select name="proyecto" id="proyecto" class="form-control">
				<option value="">.. Selecciones un proyecto</option>
				<?php  
                    foreach ($datos as $i)  
                    {?>
                    <option value="<?php echo $i->id_proyecto ?>"><?php echo $i->nombre ?></option>
                <?php }  ?>
		</select>
		</div>
		<div class="col-sm-4 b-r">
		<label for="">Seleccione un ofertante</label>
		<select name="ofertante" id="ofertante" class="form-control">
				<option value="">.. Selecciones un ofertante</option>
				<?php  
                    foreach ($datos2 as $i)  
                    {?>
                    <option value="<?php echo $i->id_ofertante ?>"><?php echo $i->nombre ?></option>
                <?php }  ?>
		</select>
		</div>
			<button type="button" class="btn btn-primary">Guardar</button>
		</form>	
	</div>
	<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Cantidad</th>
							<th>Descripción</th>
							<th>Marca Ofertada</th>
							<th>Precio Unitario</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody id="cuerpo">
						
					</tbody>
					<tfoot>
				        <tr>
							<td class="text-left" colspan="4">Total Cotización</td>
							<td colspan="1" style="text-align:right;" id="totalEnd"></td>
						</tr>
				    </tfoot>
				</table>
			</div>
</div>
