

	<div class="panel panel-primary">
		<div class="panel-heading">Listado de productos </div>
		<div class="panel-body">
			<p>
				<a href="<?php echo base_url(); ?>/productos/add" class="btn btn-primary">Agregar</a>
			</p>	
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Stock</th>
							<th>Fecha</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($datos as $dato) 
								{?>
								<tr>
									<td><?php echo $dato->id ?></td>
									<td><?php echo $dato->nombre ?></td>
									<td><?php echo $dato->precio ?></td>
									<td><?php echo $dato->stock ?></td>
									<td><?php echo fecha($dato->fecha) ?></td>
									<td>
										<a href="<?php echo base_url(); ?>productos/edit/<?php echo $dato->id; ?>" class="btn btn-warning">Modificar</a>
										<a href="javascript:void(0);" onclick="eliminar('<?php echo base_url(); ?>productos/delete/<?php echo $dato->id; ?>')" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
