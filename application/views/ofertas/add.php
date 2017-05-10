<div class="panel panel-primary">
    <div class="panel-heading"><h3>Registrar Ofertante</h3></div>
        <div class="panel-body">
            <div class="col-sm-8 b-r">
    	       <?php echo form_open(null,array("class" => "form-horizontal","id" => "formoferta")); ?>
                <div class="form-group">
                    <label>Nombre del usuario</label>
                    <input type="text" value="<?php echo set_value_input(array(),'nombre','nombre'); ?>" name="nombre" placeholder="Ingrese Nombre" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                </div>
                <?php echo form_close(); ?>
            </div>
    </div>
</div>

