<?php $url_root="/FasorElectrico/";?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fasor Eléctrico</title>
        <link rel="shortcut icon" href="favicon.png" />
        
        <!-- CSS -->
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/css_fonts.css" rel="stylesheet" type="text/css">
        <!--<link href="addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">-->
        

        <!-- JS -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- SmartMenus jQuery plugin -->
        <!--<script type="text/javascript" src="js/jquery.smartmenus.js"></script>-->

        <!-- SmartMenus jQuery Bootstrap Addon -->
        <!--<script type="text/javascript" src="addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>-->


    </head>
    <div id="loading">
  <img id="loading-image" src="<?php echo $url_root;?>img/gif-load.gif" alt="Loading..." />
</div>

    <body >
        <!-- Fixed navbar -->
        <nav class="navbar navbar-custom navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $url_root;?>">
                        <img  src="img/navbar/logo_horizontal_blanco.png"/>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                   
                    <ul class="nav navbar-nav navbar-right">
                        <li class=" <?php echo (substr($_SERVER['PHP_SELF'],strlen($url_root)) == 'nosotros.php' ? ' active' : ''); ?>">
                            
                            <a href="<?php echo $url_root;?>nosotros.php">
                                <div class="navbar-item-center">
                                <img class="btn-navbar" src="img/navbar/btn_nosotros.png"/>
                                <br class="rwd-break"/>Nosotros
                                </div>
                            </a>
                            
                        </li>
                        <li class="dropdown <?php echo (substr($_SERVER['PHP_SELF'],strlen($url_root)) == 'monitoreo.php' ? ' active' : ''); ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="navbar-item-center">
                                <img class="btn-navbar" src="img/navbar/btn_monitoreo.png"/>
                                <br class="rwd-break"/>Monitoreo<span class="caret"></span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $url_root;?>monitoreo.php" onClick="ocultar_navbar()">Monitoreo</a></li>
                                <li><a href="<?php echo $url_root;?>monitoreo.php#banco_capacitores" onClick="ocultar_navbar()">Banco de capacitores</a></li>
                                <li><a href="<?php echo $url_root;?>monitoreo.php#supresor" onClick="ocultar_navbar()">Supresor de picos</a></li>
                                <li><a href="<?php echo $url_root;?>monitoreo.php#pararrayos" onClick="ocultar_navbar()">Pararrayos</a></li>
                                <li><a href="<?php echo $url_root;?>monitoreo.php#sistema_tierra" onClick="ocultar_navbar()">Sistema de tierra</a></li>
                                
                            </ul>
                            
                        </li>
                        <li class="dropdown <?php echo (substr($_SERVER['PHP_SELF'],strlen($url_root)) == 'servicios.php' ? ' active' : ''); ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="navbar-item-center">
                                <img class="btn-navbar" src="img/navbar/btn_servicos.png"/>
                                <br class="rwd-break"/>Servicios<span class="caret"></span>
                                </div>
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a href="<?php echo $url_root;?>servicios.php" onClick="ocultar_navbar()">Servicios</a></li>
                                <li><a href="<?php echo $url_root;?>servicios.php#estudios" onClick="ocultar_navbar()">Estudios de Ingeniería</a></li>
                                <li><a href="<?php echo $url_root;?>servicios.php#mantenimiento" onClick="ocultar_navbar()">Mantenimiento</a></li>
                                <li><a href="<?php echo $url_root;?>servicios.php#reparacion" onClick="ocultar_navbar()">Reparación de Servomotores</a></li>
                            </ul>
                        </li>

                        <li class="dropdown <?php echo (substr($_SERVER['PHP_SELF'],strlen($url_root)) == 'reguladores.php' ? ' active' : ''); ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="navbar-item-center">
                                    <img class="btn-navbar" src="img/navbar/btn_reguladores.png"/>
                                    <br class="rwd-break"/>Reguladores<span class="caret"></span>
                                    </div>
                                </a>
                            <ul class="dropdown-menu ">
                                <li><a href="<?php echo $url_root;?>reguladores.php" onClick="ocultar_navbar()">Reguladores</a></li>
                                <li><a href="<?php echo $url_root;?>reguladores.php#automaticos" onClick="ocultar_navbar()">Reguladores automáticos de voltajes especiales</a></li>
                                <li><a href="<?php echo $url_root;?>reguladores.php#transformadores" onClick="ocultar_navbar()">Transformadores Variables (Variaks)</a></li>
                            </ul>
                        </li>
                       <li class="dropdown <?php echo (substr($_SERVER['PHP_SELF'],strlen($url_root)) == 'sistemas.php' ? ' active' : ''); ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="navbar-item-center"><img class="btn-navbar" src="img/navbar/btn_solares.png"/>
                                <br class="rwd-break"/>Sist. Solares<span class="caret"></span>
                                </div>
                                </a>
                            <ul class="dropdown-menu">

                                <li><a href="<?php echo $url_root;?>sistemas.php">Sistemas Solares</a></li>
                                <li><a href="<?php echo $url_root;?>sistemas.php#celdas" onClick="ocultar_navbar()">Celdas Fotovoltaicas</a></li>
                                <li><a href="<?php echo $url_root;?>sistemas.php#agua" onClick="ocultar_navbar()">Calentadores para agua</a></li>
                                <li><a href="<?php echo $url_root;?>sistemas.php#alberca" onClick="ocultar_navbar()">Calentadores para alberca</a></li>
                                <li><a href="<?php echo $url_root;?>sistemas.php#luminaria" onClick="ocultar_navbar()">Luminaria</a></li>
                                <li><a href="<?php echo $url_root;?>sistemas.php#bombas" onClick="ocultar_navbar()">Bombas de Aguas</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <div class="navbar-item-center">
                                Contáctanos
                                <br class="rwd-break"/>
                                46 18 80 62
                                <br class="rwd-break"/>
                                contacto@fasor.com.mx
                                </div>
                            </a>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>