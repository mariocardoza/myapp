<div class="panel panel-primary">
		<div class="panel-heading">Listado de usuarios </div>
		<div class="panel-body">
			<p>
				<a href="<?php echo base_url(); ?>/usuarios/add" class="btn btn-primary">Agregar</a>
			</p>	
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Cargo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($datos as $dato) 
								{?>
								<tr>
									<td><?= $dato->id ?></td>
									<td><?php echo $dato->nombre ?></td>
									<td><?php echo $dato->correo ?></td>
									<td><?php echo $dato->telefono ?></td>
									<td><?php echo $dato->nombre_unidad ?></td>
									<td>
										<a href="<?php echo base_url(); ?>usuarios/edit/<?php echo $dato->id; ?>" class="btn btn-warning">Modificar</a>
										<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url(); ?>usuarios/delete/<?php echo $dato->id; ?>')" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
