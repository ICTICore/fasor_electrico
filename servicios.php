<?php include_once 'header.php'; ?>
<!--INICIA GENERAL -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-justify">
            <br/>
            <strong>Con el fin de que nuestros clientes cuenten con un sistema eléctrico optimo, confiable, seguro y  a la vanguardia de las nuevas tecnología en el rubro Eléctrico  Calidad en Ingeniería Fasor pone a sus órdenes Servicios  de:</strong>
        </div>
    </div>
    <br/>
    <a name="estudios"></a>
    <div class="div-final"></div>
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
        <div class="container">
            <div id="analisis_corto_circuito">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/corto_circuito.png"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            El corto circuito se produce cuando existe contacto entre dos o más conductores de distintas fases o entre conductor de fase y tierra. Este fenómeno representa la situación más severa a la que se pueda ver sometida una instalación eléctrica ya que su manifestación más acentuada produce efectos térmicos y efectos dinámicos que se presentan con tal violencia que pueden provocar la destrucción mecánica de las máquinas o de los materiales involucrados  
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            Es una herramienta para determinar las corrientes de interrupción de los dispositivos de protección contra sobrecorriente y así los dispositivos de protección abran con seguridad la máxima corriente de cortocircuito que se presente
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>


    <!-- ANALISIS RARO -->
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#coordinacion_protecciones')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    Coordinación de Protecciones
                </div>
            </li>
        </div>
        <div class="container">
            <div id="coordinacion_protecciones">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/protecciones.png"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            La limitación apropiada a un área local de las condiciones de falla, para restringir los cortes de energía a los equipos afectados, realizado mediante la selección adecuada de dispositivos de protección contra falla                     
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            Un dispositivo está coordinado solo por el dispositivo de sobrecorriente más cercano a la falla este abre y el resto del sistema no es afectado                     
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>


    <div class="row">

        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#proyectos_instalaciones')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    Proyectos para instalaciones eléctricas
                </div>
            </li>
        </div>
        <div class="container">
            <div id="proyectos_instalaciones" style='display: none;'>
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/instalaciones_elec.png"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            Cálculo y dimensionamiento del sistema eléctrico así como suministro e instalación  de los elementos que intervengan en la instalación como conductores protecciones sistemas de distribución de energía.  
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            Contar una adecuado dimensionamiento del sistema eléctrico de acuerdo a las necesidades requeridas, con equipos que garanticen la efectividad y seguridad del sistema
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>

    <?php
        $titulo = "Diagrama Unifilar";
        $contenido = "Los diagramas unifilares representan todas las partes que componen a un sistema de potencia de modo gráfico, completo, tomando en cuenta las conexiones que hay entre ellos, para lograr así la forma una visualización completa del sistema de la forma más sencilla."
                . "<p class='text-justify'>Éste indica, por una sola línea y por símbolos estándar, cómo se conectan las líneas de transmisión con los aparatos asociados de un sistema eléctrico.</p> ";
        $beneficio = "El propósito de un diagrama unifilar es el de suministrar en forma concisa información significativa acerca del sistema.";
        $id_div = "diagrama_unifilar";
        $imagen = "diagrama_unifilar.png";
    ?>

    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
    
    <?php
        $titulo = "Actualización (retrofits)";
        $contenido = "Como todo equipo funcional llega a su vida útil, o bien las necesidades actuales requieren reemplazo por equipos más eficientes y con mayores presentaciones, es necesario migrar a sistemas más modernos.";
        $beneficio = "Confiabilidad de contar con equipos nuevos que se apegan a normas y certificaciones actuales. Mas funcionalidades ya que día a día los nuevos productos dan mayor funcionalidad a menor costo. Maximizar herramientas que la nueva era informática ofrece en algunos de los productos.";
        $id_div = "actualizacion_retrofit";
        $imagen = "retrofit.jpg";
    ?>

    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
    
    <?php
        $titulo = "Estudio de Arc Flash";
        $contenido = "El arco eléctrico es causado por la pérdida de la distancia de aislamiento entre equipos energizados y puede definirse al arco eléctrico como un corto circuito a través del aire (debido a la ionización del aire). Durante un arco eléctrico una gran cantidad de energía concentrada es liberada en muy poco tiempo hacia el exterior del equipo eléctrico, creando ondas de presión (explosión) que pueden dañar el oído de una persona, sus ojos, provocar quemaduras así como derretir e inclusive vaporizar el metal. Además de que estas ondas de presión pueden arrojar restos de equipo dañado, herramientas u otros objetos a través del aire, el calor emitido puede causar graves daños a los operadores por la exposición directa o a través de su ropa de trabajo que puede ser encendida.";
        $beneficio = "La evaluación de arco eléctrico (Arc Flash) de la S.E. ayuda a determinar las distancias límites de seguridad requeridas (Distancia segura, restringida, prohibida de trabajo) y riesgos por arco eléctrico, evitando lesiones o muerte al personal de operación y mantenimiento eléctrico."
                . "<p class='text-justufy'>Con ésta información se especifica el equipo de protección personal requerido (Clase de ropa necesaria)  así como las de etiquetas de advertencia para el trabajo seguro en éstos equipos, que deberán colocarse en las puertas de los cubículos de los tableros.</p>";
        $id_div = "arc_flash";
        $imagen = "arc_flashB.png";
    ?>

    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>

    <div class="div-aire"></div>
    
     <a name="mantenimiento"></a>
    <div class="div-final"></div>
    <div class="row">
        <div class="servicio-titulo">
            Mantenimiento
        </div>
    </div>
    <div class="row">
        <div class="container">
        <div class="titulo-azul">
            Predictivo
        </div>
            </div>
    </div>
    <?php
        $titulo = "Termografía Infrarroja";
        $contenido = "La termografía Infrarroja es el medio remoto para medir temperatura y visualizar gradientes de temperatura es decir la conversión de la energía calorífica en luz visible. Con la cámara termográfica se mide la energía radiante de objetos con temperaturas de cero absoluto (-273ºC) generando una imagen térmica.";
        $beneficio = "La aplicación a la inspección de los sistemas de distribución eléctrica va a ayudar a detectar de forma anticipada posibles averías al permitir ver de forma directa la evolución térmica de los diferentes componentes del sistema de distribución (líneas de distribución, subestaciones, centros de transformación).";
        $id_div = "termografia_ingrarroja";
        $imagen = "termografiaB.png";
    ?>
    
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
    
    <div class="row">
        <div class="container">
        <div class="titulo-azul">
            Preventivo
        </div>
            </div>
    </div>
    <?php
        $titulo = "Pruebas eléctricas";
        $contenido = "Como toda medida preventiva, el mantenimiento es de vital importancia en cualquier nivel, la evaluación periódica de los elementos activos de la red eléctrica para la detección oportuna de fallas potenciales por  medio de técnicas de diagnóstico como son:"
                . "<ul>"
                . "<li class='bullet_p'>Pruebas eléctricas y/o de laboratorio</li>"
                . "<li class='bullet_p'>Inspección visual</li>"
                . "<li class='bullet_p'>Limpieza y lubricación de partes móviles</li>"
                . "<li class='bullet_p'>Apriete de tornillería</li>"
                . "</ul>";
        $beneficio = "Los beneficios del mantenimiento preventivo son:"
                . "<ul>"
                . "<li class='bullet_p'>Evitar paros no programados</li>"
                . "<li class='bullet_p'>Anticipar  la presencia de fallas</li>"
                . "<li class='bullet_p'>Alargar la vida útil de los equipos</li>"
                . "<li class='bullet_p'>Aumentar la eficiencia de la instalación</li>"
                . "<li class='bullet_p'>Controlar presupuestos</li>"
                . "</ul>";
        $id_div = "pruebas_electricas";
        $imagen = "preventivo.png";
    ?>

    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
     <div class="row">
        <div class="container">
        <div class="titulo-azul">
            Correctivo
        </div>
            </div>
    </div>
    <?php
         $titulo = " Reparación y cambio físico";
        $contenido = "Todos los equipos donde sea necesario un cambio físico,  reparación mayor, ya sea por falla, avería, desgaste, envejecimiento o fin de vida útil de los equipos integrantes de sistema eléctrico."
                . "<ul>"
                . "<li class='bullet_p'>Fuga de Aceite y transformadores mediante el cambio de empaques </li>"
                . "<li class='bullet_p'>Cambio de aceite a transformadores donde el aislamiento del aceite esté fuera de los límites permisibles o bien presente BPC´s arriba de 50 ppm</li>"
                . "<li class='bullet_p'>Cambio de Boquillas</li>"
                . "<li class='bullet_p'>Cambio de terminales a cable de Media Tensión</li>"
                . "<li class='bullet_p'>Reemplazo de conductores con aislamientos críticos</li>"
                . "<li class='bullet_p'>Reemplazo o Reparación de seccionadores en aire</li>"
                . "<li class='bullet_p'>Cambio de aisladores</li>"
                . "<li class='bullet_p'>Reemplazo de Apartarrayos que hayan sufrido descargas o que estén bajos de aislamiento</li>"
                . "<li class='bullet_p'>Reemplazo de interruptores termomagnéticos y electromagnéticos en Baja Tensión</li>"
                . "</ul>"
                ;
        $beneficio = " Si el equipo esta preparado la intervención en el fallo es rápida y la reposición en la mayoría de los casos será con el mínimo tiempo. Nose necesita una infraestructura excesiva, un grupo de operarios competentes será suficiente, por lo tanto el costo de mano de obra será mínimo, será más prioritaria la experiencia y la pericia de losoperarios, que la capacidad de análisis o de estudio del tipo de problema que se produzca.";
        $id_div = "correctivo_transformadores";
        $imagen = "fuga_de_aceite.png";
        $imagen_2 = "reemplazo_seccionadores.png";
    ?>

    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <img class="img-responsive oculto-responsivo" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen_2; ?> "/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
    
    <div class="div-aire"></div>
    
    <a name="reparacion"></a>
    <div class="div-final"></div>
    <div class="row">
        <div class="servicio-titulo">
            Reparación de Servomotores y Equipo Electrónico Industrial
        </div>
    </div>
    
    <?php
        $titulo = "Servomotores";
        $contenido = "Los servicios que ofrecemos para servomotores son:"
                . "<ul>"
                . "<li class='bullet_p'>Cambio de conectores, encoders, resolvers, captadores, etc.</li>"
                . "<li class='bullet_p'>Diagnóstico eléctrico-mecánico de servomotor</li>"
                . "<li class='bullet_p'>Pruebas estáticas y dinámicas a servomotor</li>"
                . "<li class='bullet_p'>Verificación del estado de los imanes del rotor</li>"
                . "<li class='bullet_p'>Descontaminación dieléctrica de estator</li>"
                . "<li class='bullet_p'>Limpieza de piezas mecánicas en general</li>"
                . "<li class='bullet_p'>Conmutación y Ajuste</li>"
                . "<li class='bullet_p'>Cambio de rodamientos orings y reten</li>"
                . "<li class='bullet_p'>Pintura</li>"
                . "</ul>"
                ;
        $beneficio = "Confiablidad, los equipos operan en mejores condiciones de seguridad, ya que se conoce su estado, y sus condiciones de funcionamiento. Menor costo de reparaciones";
        $id_div = "servomotores_servicio";
        $imagen = "servomotores.png";
    ?>
    
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
         <?php
        $titulo = "Equipo Electrónico Industrial";
        $contenido = "Los servicios que ofrecemos son:"
                . "<ul>"
                . "<li class='bullet_p'>Servodrives</li>"
                . "<li class='bullet_p'>Variadores de velocidad</li>"
                . "<li class='bullet_p'>Pantallas</li>"
                . "<li class='bullet_p'>Fuentes de Poder</li>"
                . "<li class='bullet_p'>Tarjetas de entradas y salidas Analógica-Digital</li>"
                . "</ul>"
                ;
        $beneficio = "Confiablidad, los equipos operan en mejores condiciones de seguridad, ya que se conoce su estado, y sus condiciones de funcionamiento. Menor costo de reparaciones";
        $id_div = "equipo_electronico_industrial";
        $imagen = "equipo_electronico_industrial.png";
    ?>
    
    <div class="row">
        <div  class="col-xs-12 cursor-mano" onClick="ocultarElemento('#<?php echo $id_div; ?>')">
            <li class="bullet_p">
                <div  class="titulo-morado " >
                    <?php echo $titulo; ?>
                </div>
            </li>
        </div>
        <div class="container">
            <div id="<?php echo $id_div; ?>" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/servicios/<?php echo $imagen; ?>"/> 
                        <br/>
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify">
                            <br/>
                            <?php echo $contenido; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="titulo-morado">
                            Beneficios
                        </div>

                        <p class="text-justify">
                            <?php echo $beneficio; ?>                   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row"><div class="div-morado"></div></div>
        </div>
    </div>
    
    
    
    


</div>
<div class="div-aire"></div>


<!--TERMINA GENERAL -->



<?php include_once 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $("#analisis_corto_circuito").hide();
        $("#coordinacion_protecciones").hide();
    });
</script>