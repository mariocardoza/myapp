<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bienvenido</title>

    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
<?php 
            if($this->session->flashdata('mensaje') != "")
            {?>
                 <div class="alert alert-<?php echo $this->session->flashdata('css'); ?> alert-dismissable">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong><?php echo $this->session->flashdata('mensaje'); ?></strong> 
                 </div>
            <?php } 

            $errors=validation_errors('<li>','</li>');
            if($errors!="")
            {?>
                <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <?php echo $errors; ?>
                    </ul>
                </div>
            <?php
            }
        ?>
<div class="middle-box text-center loginscreen  animated fadeInDown">

        <div>
            <div>
                <h1 class="logo-name">IN+</h1>           
            </div>
            <h3>Bienvenido IN+</h3>
            <p>Login in. To see it in action.</p>
            <?php echo form_open(null,array("class" => "m-t","name" => "form")) ?>
                <div class="form-group">
                    <input type="text" name="correo" class="form-control" placeholder="Correo">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Inicio</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            <?php echo form_close() ?>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
</div>
<!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>public/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>

</body>

</html>

