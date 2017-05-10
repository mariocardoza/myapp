<div class="panel panel-primary">
    <div class="panel-heading"><h3>Registrar Usuarios</h3></div>
        <div class="panel-body">
            <div class="col-sm-8 b-r">
    	       <?php echo form_open(null,array("class" => "form-horizontal")); ?>
                <div class="form-group">
                    <label>Nombre del usuario</label>
                    <input type="text" value="<?php echo set_value_input(array(),'nombre','nombre'); ?>" name="nombre" placeholder="Ingrese Nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" name="correo" value="<?php echo set_value_input(array(),'correo','correo'); ?>" placeholder="ingrese el correo" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="telefono" value="<?php echo set_value_input(array(),'telefono','telefono'); ?>" placeholder="telefono" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" value="<?php echo set_value_input(array(),'pass','pass'); ?>" name="pass" placeholder="contraseña" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cargo</label>
                    <select name="cargo" id="" class="form-control">
                        <option value="">Seleccione un cargo</option>
                        <?php  
                        foreach ($datos as $i)  
                        {?>
                        <option value="<?php echo $i->id_u ?>"><?php echo $i->nombre_unidad ?></option>
                        <?php }  ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                </div>
                <?php echo form_close(); ?>
            </div>
    </div>
</div>

