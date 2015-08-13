<?php include_once 'header.php'; ?>
<!--INICIA GENERAL -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <br/>
            Con el fin de que nuestros clientes cuenten con un sistema eléctrico optimo, confiable, seguro y  a la vanguardia de las nuevas tecnología en el rubro Eléctrico  Calidad en Ingeniería Fasor pone a sus órdenes Servicios  de:
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="servicio-titulo">
            Estudios de Ingeniería
        </div>
    </div>
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#analisis_corto_circuito')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    Análisis de Corto Circuito
                </div>
            </li>
        </div>
        <div id="analisis_corto_circuito">
            <div class="row">
                <div class="col-xs-3">
                    <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/corto_circuito.png"/> 
                    <br/>
                </div>
                <div class="col-xs-5">
                    <p class="text-justify">
                        <br/>
                        El corto circuito se produce cuando existe contacto entre dos o más conductores de distintas fases o entre conductor de fase y tierra. Este fenómeno representa la situación más severa a la que se pueda ver sometida una instalación eléctrica ya que su manifestación más acentuada produce efectos térmicos y efectos dinámicos que se presentan con tal violencia que pueden provocar la destrucción mecánica de las máquinas o de los materiales involucrados  
                    </p>
                </div>
                <div class="col-xs-4">
                    <div class="titulo-morado">
                        Beneficios
                    </div>

                    <p class="text-justify">
                        Es una herramienta para determinar las corrientes de interrupción de los dispositivos de protección contra sobrecorriente y así los dispositivos de protección abran con seguridad la máxima corriente de cortocircuito que se presente
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="row"><div class="div-morado"></div></div>
    
    <!-- ANALISIS RARO -->
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#coordinacion_protecciones')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    Coordinación de Protecciones
                </div>
            </li>
        </div>
        <div id="coordinacion_protecciones">
            <div class="row">
                <div class="col-xs-3">
                    <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/protecciones.png"/> 
                    <br/>
                </div>
                <div class="col-xs-5">
                    <p class="text-justify">
                        <br/>
                        La limitación apropiada a un área local de las condiciones de falla, para restringir los cortes de energía a los equipos afectados, realizado mediante la selección adecuada de dispositivos de protección contra falla                     
                    </p>
                </div>
                <div class="col-xs-4">
                    <div class="titulo-morado">
                        Beneficios
                    </div>

                    <p class="text-justify">
                        Un dispositivo está coordinado solo por el dispositivo de sobrecorriente más cercano a la falla este abre y el resto del sistema no es afectado                     
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="row"><div class="div-morado"></div></div>

    <br/>


</div>



<!--TERMINA GENERAL -->
<!--INICIA Estudios de Ingenieria -->
<a name="estudios"></a>
<div class="div-azul"></div>
<div class="div-final"></div>
<div class="container">
    <div class="col-xs-12">
        <div class="titulo-verde-grande">
            Estudios de Ingeniería
        </div>
    </div>
    <div class="col-xs-12">

        <div class="div-basura">Contenido </div>

    </div>
</div>
<!--Termina Estudios de Ingenieria -->


<!--INICIA Mantenimiento -->
<a name="mantenimiento"></a>
<div class="div-azul"></div>
<div class="div-final"></div>
<div class="container">
    <div class="col-xs-12">
        <div class="titulo-verde-grande">
            Mantenimiento
        </div>
    </div>
    <div class="col-xs-12">
        <div class="div-basura">Contenido </div>
    </div>
</div>
<!--Termina Mantenimiento -->

<!--INICIA Reparación de Servomotores -->
<a name="reparacion"></a>
<div class="div-azul"></div>
<div class="div-final"></div>
<div class="container">
    <div class="col-xs-12">
        <div class="titulo-verde-grande">
            Reparación de Servomotores
        </div>
    </div>
    <div class="col-xs-12">
        <div class="div-basura">Contenido </div>
    </div>
</div>
<!--Termina Reparación de Servomotores -->


<?php include_once 'footer.php'; ?>
<script>

    function ocultarElemento(id_elemento) {

        if ($(id_elemento).is(":visible")) {
            $(id_elemento).hide();
        } else {
            $(id_elemento).show();
        }

    }

    $(document).ready(function () {
        $("#analisis_corto_circuito").hide();
        $("#coordinacion_protecciones").hide();
        
    });


</script>