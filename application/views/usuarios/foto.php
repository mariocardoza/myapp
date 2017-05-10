<div class="panel panel-primary">
    <div class="panel-heading"><h3>Registrar Usuarios</h3></div>
        <div class="panel-body">
            <div class="col-sm-8 b-r">
    	      <form class="dropzone" action="<?php echo site_url('/usuarios/upload'); ?>">
                           
                </form>
                <a class="btn btn-primary" href="<?= base_url() ?>usuarios/ver/<?= $this->session->userdata('id') ?>">Volver al perfil</a>
            </div>
    </div>
</div>

