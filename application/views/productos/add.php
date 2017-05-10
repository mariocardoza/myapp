<div class="panel panel-primary">
    <div class="panel-heading"><h3>Agregar productos</h3></div>
        <div class="panel-body">
            <div class="col-sm-8 b-r">
    	       <?php echo form_open(null,array("class" => "form-horizontal")); ?>
                <div class="form-group">
                    <label>Nombre Producto</label>
                    <input type="text" value="<?php echo set_value_input(array(),'nombre','nombre'); ?>" name="nombre" placeholder="Ingrese Nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" name="precio" value="<?php echo set_value_input(array(),'precio','precio'); ?>" placeholder="ingrese el precio" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" name="stock" value="<?php echo set_value_input(array(),'stock','stock'); ?>" placeholder="stock" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" value="<?php echo set_value_input(array(),'fecha','fecha'); ?>" name="fecha" placeholder="Telefono" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                </div>
                <?php echo form_close(); ?>
            </div>
    </div>
</div>

