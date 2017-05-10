<div class="panel panel-primary">
		<div class="panel-heading">Ver de Usuario </div>
		<div class="panel-body">
			<p>
				<a href="<?php echo base_url(); ?>/usuarios/foto" class="btn btn-primary">Cambiar Foto</a>
			</p>
			<p>
				<img src="<?= base_url()?>public/img/<?= $datos->foto ?>" width="249" heigth="187" alt="">
			</p>	
				<label for="">Nombre: </label><br><label for=""><strong> <?= $datos->nombre ?></strong></label><br><br>
				<label for="">Correo: </label><br><label for=""><strong> <?= $datos->correo ?></strong></label><br><br>
				<label for="">Telefono: </label><br><label for=""><strong> <?= $datos->telefono ?></strong></label><br><br>
				<label for="">Nombre de la Unidad: </label><br><label for=""> <?= $this->session->userdata('nombre_unidad') ?></label>
		</div>
	</div>
