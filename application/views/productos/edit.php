<div class="panel panel-primary">
    <div class="panel-heading">Editar Productos</div>
        <div class="panel-body">
<div class="col-sm-8 b-r">
	<?php echo form_open(null,array("class" => "form-horizontal")); ?>
        <div class="form-group">
            <label>Nombre Producto</label>
            <input type="text" value="<?php echo set_value_input($datos,'nombre',$datos->nombre) ?>" name="nombre" placeholder="Ingrese Nombre" class="form-control">
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input type="text" name="precio" value="<?php echo set_value_input($datos,'precio',$datos->precio); ?>" placeholder="ingrese el precio" class="form-control">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stock" value="<?php echo set_value_input($datos,'stock',$datos->stock); ?>" placeholder="stock" class="form-control">
        </div>
        <div class="form-group">
            <label>Fecha</label>
            <input type="date" value="<?php echo set_value_input($datos,'fecha',$datos->fecha); ?>" name="fecha" placeholder="Telefono" class="form-control">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Editar</strong></button>
        </div>
        <?php echo form_close(); ?>
</div>
</div>
</div>
