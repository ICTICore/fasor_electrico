<?php include_once 'header.php'; ?>

<!--INICIA GENERAL -->
<div class="container">
    <div class="div-aire"></div>
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/ondas.png"/>
        </div>
        <div class="col-md-6">
            <p class="text-justify">
                Un Regulador es un equipo eléctrico que acepta una tensión de voltaje variable a la entrada, dentro de un parámetro predeterminado y mantiene a la salida una tensión constante (regulada).
            </p>
            <p class="text-justify">
                Los reguladores son la protección ideal para todo tipo de  servicios e industria en general. Por su precisión en el voltaje regulado, lo hace el equipo más confiable en el mercado, pueden corregir las variaciones de la red eléctrica  con campos de regulación  amplios y soportar condiciones de trabajo severas.
            </p>
        </div>
    </div>
    <div class="div-aire"></div>
    <div class="row">

        <div class="col-md-6">
            <div class="titulo-azul-grande">Descripción</div>
            <p class="text-justify">
                Su funcionamiento se basa en un autotransformador de columna , sobre el cual se dispone un cursor accionado por un servomotor, que en su recorrido suma o resta espiras, este movimiento de auto ajuste es controlado por un comando electrónico, que se activa cada vez que la tensión de salida se desvía de su valor de calibración, ajustándose automáticamente y con ello mantiene permanentemente el voltaje de salida estable.
            </p>
            <div class="titulo-azul-grande">Beneficios</div>
            <ul class="text-justify">
                <li class="bullet_b">El regulador sostiene el voltaje independientemente de la carga, la frecuencia o del factor de potencia</li>
                <li class="bullet_b">La eficiencia a plena carga es del 98 al 99. 2 % según capacidad</li>
                <li class="bullet_b">Onda sinodal secundaria (componente armónica cero) </li>
                <li class="bullet_b">La regulación es automática y continua con velocidad de regulación de 23.9  a 68.2 volts por segundo según capacidad del regulador. Las bobinas de regulación están sumergidas en aceite dieléctrico</li>
                <li class="bullet_b">Resisten sobrecargas hasta cinco veces su capacidad nominal durante segundos, como es necesario para el arranque de motores y otros equipos</li>
                <li class="bullet_b">Requieren de servicio mínimo, la duración de los equipos es superior a los 25 años en servicio continuo. El mantenimiento preventivo se programa en periodos de tres a cinco años dependiendo  del trabajo a que está sujeto el regulador</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/esquema.png"/>
            <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/grafica.png"/>
        </div>
    </div>
<div class="div-aire"></div>
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/vista_panoramica_2.png"/>
        </div>
        <div class="col-md-6">
            
            <div class="titulo-azul-grande">Capacidades y dimensiones</div>
            <p class="text-justify">
                La capacidad de los reguladores se mide en kVA. Para seleccionar el equipo son necesarios  tres datos importantes:
            </p>
            <ul class="justify-text">
                <li class="bullet_b"><b>Voltaje de entrada o alimentación,</b> de los equipos a proteger: es el voltaje que debe suministrar el regulador y la entrada que requerirá su maquinaria, equipos o instalaciones para su correcto funcionamiento. Este dato puede ser localizado en la placa de datos o manual de instalación de su equipo o maquinaria. La tensión de la red eléctrica puede variar de un país a otro, así como el voltaje de alimentación de sus equipos dependiendo de su origen </li>
                <li class="bullet_b"><p class="text-justify"><b>El consumo de los equipos, </b>datos localizados en la placa de datos o manual de sus equipos. Pueden ser expresados en: watts, kW ( 1000 watts = 1 KW), amperes ó HP. </p><p class="text-justify">Para equipos o sistemas en operación la corriente de consumo se puede medir físicamente, con un amperímetro de gancho. Realizando la lectura con todo su sistema en operación para obtener el máximo consumo de corriente</p></li>
                <li class="bullet_b"><p class="text-justify"><b>Número de fases de alimentación</b> Se determina a través de la placa de datos o manual de instalación de la maquinaria o equipos a proteger.</p> 
                    <p class="text-justify">Los sistemas eléctricos convencionales pueden ser: <b>Monofásicos</b>, <b>Bifásicos</b>, <b>Bifásicos con neutro</b>, <b>Trifásicos</b></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row" onClick="ocultarElemento('#monofasicos')">

            <div  class="col-xs-12 cursor-mano" >
                <li class="bullet_b">
                    <div  class="titulo-azul" >
                        Mónofasicos
                    </div>
                </li>
            </div>
            <div id="monofasicos">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-justify">Se fabrican en capacidades de 2 a 500 kVA en voltajes de 120, 127, 220, 254, 266, entre otros.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/monofasico.png"/>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/tabla_monofasico.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><div class="div-azul"></div></div>
    </div>
    <div class="container">
        <div class="row" onClick="ocultarElemento('#bifasicos')">

            <div  class="col-xs-12 cursor-mano" >
                <li class="bullet_b">
                    <div  class="titulo-azul" >
                        Bifasicos sin neutro
                    </div>
                </li>
            </div>
            <div id="bifasicos">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="text-justify">Los reguladores bifasicos sin neutro se fabrican en capacidades de 2 a 30 KVA. Se utilizan normalmente para la protección de equipos de origen Europeo o Asiático, como plotters, rayos X, Routers, foto revelado, etc. donde la alimentación de los mismos requiere 220 volts sin neutro.</p>
                        <p class="text-justify">El regulador bifásico se fabrica en dos presentaciones:</p>
                        <ul>
                            <li class="bullet_b"><b>Regulador estándar</b>: el cual consta del borne de conexiones tradicional para su instalación</li>
                            <li class="bullet_b"><b>Con contacto y clavijas</b>: cuenta en la parte posterior de la caja de control contactos y clavijas de acuerdo a la capacidad del equipo maquinaria que se va a proteger</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/bifasico_sin_neutro.png"/>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/tabla_bifSinNeutro.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><div class="div-azul"></div></div>
    </div>

    <div class="container">
        <div class="row" onClick="ocultarElemento('#bifasicos_cn')">
            <div  class="col-xs-12 cursor-mano" >
                <li class="bullet_b">
                    <div  class="titulo-azul" >
                        Bifasicos con neutro
                    </div>
                </li>
            </div>
            <div id="bifasicos_cn">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="text-justify">Este equipo de regulación se fabrica para aquellos sistemas donde se requiere tener reguladas dos fases y un neutro en casos donde el regulador bifásico de 220 volts (monofásico 220 volts) no sirve para estas condiciones de trabajo.</p>
                        <p class="text-justify">Estos reguladores se pueden entregar en dos presentaciones: un sólo gabinete o dos equipos individuales.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/bifasico_conNeutro.png"/>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/tabla_bifConNeutro.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><div class="div-azul"></div></div>
    </div>

    <div class="container">
        <div class="row" onClick="ocultarElemento('#trifasico')">
            <div  class="col-xs-12 cursor-mano" >
                <li class="bullet_b">
                    <div  class="titulo-azul" >
                        Regulador automático de voltaje trifásico con núclueo único o regulación independiente por fase
                    </div>
                </li>
            </div>
            <div id="trifasico">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        <p class="text-justify">El regulador con núcleo trifásico único es útil en el 95% de los casos en la protección de los sistemas eléctricos. Sirve en sistemas donde la variación de voltaje entre fases se comporta de manera uniforme, y la variación entre fases y neutro es no mayor a 7 u 8 volts.</p>
                        <p class="text-justify">La regulación trifásica con núcleo único se realiza conectando la caja de control en las fases del equipo A-C. El control electrónico lee las variaciones de voltaje y ordena ajustarlo de manera automática desplazando uniformemente las tres fases (la conmutación está unida a un solo movimiento).</p>
                        <p class="text-justify">La regulación trifásica independiente por fase, se utiliza en los sistemas trifásicos desbalanceados, donde el regulador convencional por su sistema no corrige el desbalance entre las fases y el neutro.</p>
                        <p class="text-justify">Este sistema se recomienda para variaciones superiores a los 8 volts entre fases y neutro.</p>
                        <p class="text-justify">El sistema trifásico con regulación independiente por fase, está formado por tres reguladores monofásicos. Cada uno se ajusta de manera independiente y en conjunto ofrece un sistema trifásico regulado.</p>
                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/regulador_trif.png"/>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/tabla_trifasico.png"/>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/tabla_trif440.png"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"><div class="div-azul"></div></div>
    </div>
    <div class="div-aire"></div>

</div>
<!--TERMINA GENERAL -->
<!--INICIA Reguladores automáticos de voltajes especiales -->
<a name="automaticos"></a>
<div class="div-azul"></div>
<div class="div-final"></div>
<div class="container">
    <div class="col-xs-12">
        <div class="titulo-verde-grande">
            Reguladores automáticos de voltajes especiales
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-justify">
            <p class="text-justify">Adicionalmente a la  línea de reguladores, brindamos asesoría técnica, realización de estudios, diseños y proyectos a todo tipo de personas, empresas o instituciones.</p>
            <p class="text-justify">Diseñamos y fabricamos una gran variedad de equipos de regulación, con características especiales, estas especificaciones normalmente no son cubiertas por la línea de reguladores estándar, son equipos hechos a la medida de la necesidad del cliente.</p>

            <div class="titulo-azul">Voltaje variable de entrada</div>
            <ul>
                <li class="bullet_b">Para condiciones extremas de variación de voltaje, donde los reguladores convencionales no tienen capacidad para protegerle, fabricamos amplios campos de regulación de acuerdo a sus necesidades</li>
                <li class="bullet_b">Para todos aquellos voltajes de línea, que no son cubiertos por las conexiones comerciales convencionales</li>
            </ul>
            <div class="titulo-azul">Voltaje Regulado</div>
            <ul>
                <li class="bullet_b">Para todos aquellos equipos y maquinaria especial de importación, que requieren voltaje de alimentación regulado, diferente al servicio eléctrico comercial nacional</li>
                <li class="bullet_b">Para procesos productivos, de laboratorio o investigación, donde se requieren voltajes regulador con precisión menores a &plusmn; 1.0 %</li>
            </ul>
            <div class="titulo-azul">Capacidad de Regulador</div>
            <ul>
                <li class="bullet_b">Para los equipos que necesitan una capacidad específica que está fuera de las listas de fabricación estándar</li>
            </ul>

            <div class="titulo-azul">Diagrama de conexión</div>
            <ul>
                <li class="bullet_b">Diseños y fabricación para todo tipo de conexión eléctrica para el mercado nacional e internacional</li>
            </ul>

            <div class="titulo-azul-grande">Aplicaciones </div>


            <div class="titulo-azul">Comercial</div>
            <ul>
                <li class="bullet_b">Sistemas, equipos eléctricos y electrónicos en edificios, centros comerciales, bancos, oficinas, centros de cómputo, fotorevelado, fotocopiado, surtidores de combustible, tiendas de autoservicio, plotters, routers entre otro</li>
            </ul>
            <div class="titulo-azul">Industrial</div>
            <ul>
                <li class="bullet_b">Todo tipo de líneas de ensamble automatizado, equipos y maquinaria textil, mecánica, química, etc. con tecnología de punta, sistemas de producción en general y todo tipo de maquinaria eléctrica y electrónica</li>
            </ul>

            <div class="titulo-azul">Instituciones educativas</div>
            <ul>
                <li class="bullet_b">Centros de cómputo, laboratorios, bibliotecas, centros de investigación y desarrollo</li>
            </ul>

            <div class="titulo-azul">Radiodifusoras, Televisoras y Cable</div>
            <ul>
                <li class="bullet_b">Protección integral de todos los sistemas de las plantas emisoras. Protección de equipos de recepción y distribución de señal de radio, tv y cable</li>
            </ul>

            <div class="titulo-azul">Médico</div>
            <ul>
                <li class="bullet_b">Protección de hospitales, clínicas y consultorios en su totalidad</li>
                <li class="bullet_b">Protección de equipos para rayos “x”, tomografía, entre otros</li>
            </ul>

            <div class="titulo-azul">Doméstico</div>
            <ul>
                <li class="bullet_b">Protección de residencias, casas habitación y unidades habitacionales</li>
            </ul>
            <img class="img-responsive" src="<?php echo $url_root; ?>img/reguladores/aplicaciones.png"/>
        </div>
    </div>
    <div class="div-aire"></div>
</div>
<!--Termina Reguladores automáticos de voltajes especiales -->


<!--INICIA Transformadores variables (VAriaks) -->
<a name="transformadores"></a>
<div class="div-azul"></div>
<div class="div-final"></div>
<div class="container">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12 titulo-verde-grande">Transformadores Variables (VARIAKS)</div>
            <div class="col-md-8 col-md-offset-2 text-justify">
                <p class="text-justify">Los transformadores variables de columna. Estos toman la línea de voltaje y proveen un voltaje de salida variable ajustable a la necesidad del cliente. Para sistemas:</p>
                <ul>
                    <li class="bullet_b">Monofásicos</li>
                    <li class="bullet_b">Bifásicos</li>
                    <li class="bullet_b">Trifásicos</li>
                </ul>
                <p class="text-justify">Son equipos con un funcionamiento simple y confiable, están disponibles en dos opciones: <b>Operación manual</b> y <b>Operación con motor</b></p>

                <p class="text-justify">Proveen una excelente calidad de energía, una forma de seno constante, con capacidad de consumo de corriente desde cero hasta carga completa en cualquier posición de voltaje de salida. Diseñados para uso pesado, disponibles en dos opciones:</p>
                <ul>
                    <li class="bullet_b">Regulación en seco</li>
                    <li class="bullet_b">Regulación en aceite</li>
                </ul>

                <div class="titulo-azul-grande">Aplicaciones</div>

                <ul>
                    <li class="bullet_b">Pruebas de laboratorio a transformadores</li>
                    <li class="bullet_b">Desarrollo de proyectos de investigación</li>
                    <li class="bullet_b">Certificación de pruebas eléctricas</li>
                    <li class="bullet_b">Prueba de laboratorio a motores</li>
                    <li class="bullet_b">Pruebas de laboratorio a herramientas</li>
                    <li class="bullet_b">Pruebas de laboratorio a equipo de telecomunicaciones</li>
                    <li class="bullet_b">Incremento de productividad a procesos de fabricación</li>
                </ul>

                <div class="titulo-azul">Características y especificaciones técnicas</div>
                <ul>
                    <li class="bullet_b">Capacidades Variaks en equipos monofásicos y bifásicos y trifásicos de 2 a 300 kVA</li>
                    <li class="bullet_b">Voltajes primarios: 120, 220, 380, 440, u otros</li>
                    <li class="bullet_b">Voltajes variables secundarios: 0-120 V, 0-220 V, 0-440 V,-500 V, 0-600 V,            0 – 1000 V, 0 – 1500 V, u otros</li>
                    <li class="bullet_b">Capacidad de consumo de corriente: 16-420 amperes</li>
                    <li class="bullet_b">Precisión de tensiones secundarias: 1.2 – 1.3 volts,para equipos especiales hasta 0.5 Volts</li>
                    <li class="bullet_b">Rigidez dieléctrica superior a 23 KV en equipos en aceite</li>
                    <li class="bullet_b">Diseñados para trabajar hasta 30°C de temperatura sobre ambient</li>
                    <li class="bullet_b">Muy bajas pérdidas en vacío</li>
                    <li class="bullet_b">Reducido nivel de ruido</li>
                    <li class="bullet_b">Excelente regulación vacío/carga</li>
                    <li class="bullet_b">Alto rendimiento de trabajo</li>
                    <li class="bullet_b">Los Equipos soportan la capacidad máxima</li>
                </ul>



                <p class="text-justify"></p>
                <p class="text-justify"></p>
            </div>
        </div>
        <div class="titulo-azul-grande">Aliados Estratégicos</div>        

        <div class="row">
            <div class="col-md-6">
                <div class="titulo-azul">¿Quién es New Line?</div>
                <div class="div-aire"></div>
                <p class="text-justify">
                    Fabricantes de Reguladores Automáticos  de Voltaje y Transformadores Variables  (Variacs) en capacidades de 2 a 1, 000 kVA  para voltajes en baja tensión. 
                </p>
                <p class="text-justify">
                    Tecnología es de origen Alemán. Con más de 30 años de experiencia atendiendo las necesidades de protección eléctrica del mercado Mexicano. 
                </p>
            </div>
            <div class="col-md-6">
                <a href="http://www.corpnewline.com/ " target="_blank">
                <img class="img-responsive" style="width: 60%; margin: 0 auto;" src="<?php echo $url_root; ?>img/reguladores/marca_new_line.png"/>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="div-aire"></div>
    
    <!--Termina Mantenimiento -->

   


    <?php include_once 'footer.php'; ?>
    <script>
        $(document).ready(function () {
            $("#monofasicos").hide();
            $("#bifasicos").hide();
            $("#bifasicos_cn").hide();
            $("#trifasico").hide();
        });
    </script>