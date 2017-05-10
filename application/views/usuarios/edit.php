<div class="panel panel-primary">
    <div class="panel-heading">Editar Usuario</div>
        <div class="panel-body">
<div class="col-sm-8 b-r">
	<?php echo form_open(null,array("class" => "form-horizontal")); ?>
        <div class="form-group">
            <label>Nombre del usuario</label>
            <input type="text" value="<?php echo set_value_input($datos,'nombre',$datos->nombre) ?>" name="nombre" placeholder="Ingrese Nombre" class="form-control">
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="text" name="correo" value="<?php echo set_value_input($datos,'correo',$datos->correo); ?>" placeholder="ingrese el correo" class="form-control">
        </div>
        <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="telefono" value="<?php echo set_value_input($datos,'telefono',$datos->telefono); ?>" placeholder="telefono" class="form-control">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Editar</strong></button>
        </div>
        <?php echo form_close(); ?>
</div>
</div>
</div>
