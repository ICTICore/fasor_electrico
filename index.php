<?php
include_once 'header.php';
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="<?php echo $url_root; ?>img/banner/a.png" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item"> <img src="<?php echo $url_root; ?>img/banner/b.png" style="width:100%" data-src="" alt="Second    slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item"> <img src="<?php echo $url_root; ?>img/banner/c.png" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>

<div class="div-gris">
    <div class="container">
        <div class="col-sm-6 col-lg-3 ">
            <div class="index-acceso">
                <div class="index-acceso-title">
                    <a href="<?php echo $url_root;?>monitoreo.php">
                    <img src="<?php echo $url_root;?>img/index/btn_SecCalidad.png">
                    </a>
                    <br/>
                    Calidad y Monitoreo
                </div>
                <div class="index-acceso-body">
                    <p>
                    Damos calidad a la energia, mitigando así los disturbios que se puedan generar. 
                    </p>
                    <p>
                    Con las herramientas de Monitoreo podemos medir y gestionar parámetros eléctricos
                    </p>
                </div>
                <div class="index-acceso-body-link">
                    <a href="<?php echo $url_root;?>monitoreo.php">
                    <img src="<?php echo $url_root;?>img/btn/btn_sm_g.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="index-acceso">
                <div class="index-acceso-title ">
                    <a href="<?php echo $url_root;?>servicios.php">
                    <img src="<?php echo $url_root;?>img/index/btn_Seccservicos.png">
                    </a>
                    <br/>
                    <div class="titulo-morado">
                    Servicios Eléctricos
                    </div>
                </div>
                <div class="index-acceso-body">
                    <p>
                    Conoce nuestra gama de servicios Eléctricos: Servicios de Ingeniería, Mantenimiento, Reparación Actualización y más...
                    </p>
                </div>
                <div class="index-acceso-body-link">
                    <a href="<?php echo $url_root;?>servicios.php">
                    <img src="<?php echo $url_root;?>img/btn/btn_sm_p.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="index-acceso">
                <div class="index-acceso-title">
                    <a href="<?php echo $url_root;?>reguladores.php">
                    <img src="<?php echo $url_root;?>img/index/btn_SeccReguladores.png">
                    </a>
                    <br/>
                    <div class="titulo-azul">
                    Reguladores de Tensión
                    </div>
                </div>
                <div class="index-acceso-body">
                    <p>
                    Proporcionan una fuente de tensión regulada dentro de un margen permisible eliminando caíadas o elevaciones de tensión perjudiciales a equipos
                    </p>
                </div>
                <div class="index-acceso-body-link">
                    <a href="<?php echo $url_root;?>reguladores.php">
                    <img src="<?php echo $url_root;?>img/btn/btn_sm_b.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="index-acceso">
                <div class="index-acceso-title">
                    <a href="<?php echo $url_root;?>sistemas.php">
                    <img src="<?php echo $url_root;?>img/index/btn_SeccSolares.png">
                    </a>
                    <br/>
                    <div class="titulo-amarillo">
                    Sistemas Solares
                    </div>
                </div>
                <div class="index-acceso-body">
                    <p>
                    Fomentamos el aprovechamiento de la energía solar como recurso renovable, transformandola en energía útil, obetiendo grandes ahorros económicos y reduciendo el consumo de combustibles fósiles
                    </p>
                </div>
                <div class="index-acceso-body-link">
                    <a href="<?php echo $url_root;?>sistemas.php">
                    <img src="<?php echo $url_root;?>img/btn/btn_sm_y.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="titulo-azul-grande">
        Aplicaciones
    </div>
    <div class="col-md-6">
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_g.png"></div>
        <div class="col-xs-10">
            <div class="titulo-verde">
                Comercial
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Sistemas, equipos eléctricos y electrónicos en edificios, centros comerciales, bancos, oficinas, centros de cómputo, fotorevelado, fotocopiado, surtidores de combustible, tiendas de autoservicio, plotters, routers entre otros.</p>
        </div>
        
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_p.png"></div>
        <div class="col-xs-10">
            <div class="titulo-morado">
            Industrial
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Todo tipo de líneas de ensamble automatizado, equipos y maquinaria textil, mecánica, química, etc. con tecnología de punta, sistemas de producción en general y todo tipo de maquinaria eléctrica y electrónica.</p>
        </div>
        
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_b.png"></div>
        <div class="col-xs-10">
            <div class=" titulo-azul">
            Instituciones educativas
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Centros de cómputo, laboratorios, bibliotecas, centros de investigación y desarrollo.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_y.png"></div>
        <div class="col-xs-10 ">
            <div class="titulo-amarillo">
            Radiodifusoras, Televisoras y Cable
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Protección integral de todos los sistemas de las plantas emisoras.
Protección de equipos de recepción y distribución de señal de
radio, tv y cable.</p>
        </div>
        
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_g.png"></div>
        <div class="col-xs-10">
            <div class=" titulo-verde">
            Médico
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Protección de hospitales, clínicas y consultorios en su totalidad.
Protección de equipos para rayos “x”, tomografía, entre otros.</p>
        </div>
        
        <div class="col-xs-1"><img class="btn-bullet" src="<?php echo $url_root;?>img/btn/btn_sm_p.png"></div>
        <div class="col-xs-10">
            <div class=" titulo-morado">
            Doméstico
            </div>
        </div>
        <div class="col-xs-12">
            <p class="justify-text">Protección de residencias, casas habitación y unidades habitacionales.
        </div>
    </div>
    
</div>
<div class="div-azul"></div>

<div class="container">
    <div class="col-md-6">
        <div class="titulo-azul-grande">
            ¿Por que nosotros?
        </div>
        <br/>
        <p class="justify-text">Brindamos seguridad a las instalaciones eléctricas basadas
        en normas nacionales e internacionales, propuestas
        tecnico-economicas eficientes y de vanguardia.
        </p>
        <p class="justify-text">
            <b>Ofrecemos</b>: Profesionalismo, Formalidad, Respaldo,
        Compromiso, Asesoría, Garantía en equipo suministrado y/o proyecto
        </p>

    </div>
    <div class="col-md-6">
        <img class="img-responsive" src="<?php echo $url_root;?>img/index/servicios.jpg">
    </div>
</div>
</div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
include_once 'footer.php';
?>
