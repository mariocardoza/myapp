<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alcaldia Municipal de Verapaz</title>

    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
<?php 
   if($this->session->userdata('id')) {?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" width="50" heigth="50" class="img-circle" src="<?php echo base_url(); ?>public/img/<?= $this->session->userdata('correo'); ?>.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nombre'); ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('nombre_unidad'); ?><b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?= base_url() ?>usuarios/ver/<?= $this->session->userdata('id') ?>">Perfil</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailto:<?php echo $this->session->userdata('correo') ?>">Escribir Correo</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);" onclick="salir('<?php echo base_url() ?>welcome/salir')" >Cerrar Sesion</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Alcaldia
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <?php if ($this->session->userdata('id_unidad') == 1) {?>
                 <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Usuarios</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="<?php echo base_url(); ?>usuarios">Listado de Usuarios</a></li>
                        <li><a href="<?php echo base_url(); ?>usuarios/add">Agregar usuario</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Productos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="<?php echo base_url(); ?>productos">Listado de productos</a></li>
                        <li><a href="<?php echo base_url(); ?>productos/add">Agregar productos</a></li>
                    </ul>
                </li>

                <li class="">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Ofertas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="<?php echo base_url(); ?>ofertas">Listado de Ofertantes</a></li>
                        <li><a href="<?php echo base_url(); ?>ofertas/add">Agregar Ofertantes</a></li>
                        <li><a href="<?php echo base_url(); ?>ofertas/detalle">Agregar detalle Ofertas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="Landing_page/index.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>public/img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>public/img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>public/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0);" onclick="salir('<?php echo base_url() ?>welcome/salir')">
                        <i class="fa fa-sign-out"></i> Cerrar Session
                    </a>
                </li>
            </ul>

        </nav>
      <?php } ?>
      </div>
      <div class="wrapper wrapper-content animated fadeIn">
      <?php 
            if($this->session->flashdata('mensaje') != "")
            {?>
                 <div class="alert alert-<?php echo $this->session->flashdata('css'); ?> alert-dismissable">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('mensaje'); ?>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <?php echo $content_for_layout; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           
        <div class="footer">
            <div class="pull-right">
               <strong>Alcandía Municipal de Verapaz</strong>
            </div>
            <div>
                <strong>Copyright</strong> Universidad de El Salvador &copy; <script>document.write(new Date().getFullYear())</script>
            </div>
        </div>

         </div>
        </div>

        


    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>public/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/mijs.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>public/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/cotizacion.js"></script>
    <script src="<?php echo base_url(); ?>public/js/oferta.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/dropzone/dropzone.js"></script>
        <script>
             $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: true,
                uploadMultiple: true,
                parallelUploads: 100,
                maxFiles: 100,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on("sendingmultiple", function() {
                    });
                    this.on("successmultiple", function(files, response) {
                    });
                    this.on("errormultiple", function(files, response) {
                    });
                }

            }

       });
        </script>
</body>

</html>
