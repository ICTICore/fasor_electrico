</body>
<div class="footer">
    <div class="div-azul"></div>
    <div class="div-body">
        <div class="container">
            <div class="col-xs-12 col-md-5 ">
                <a href="https://www.facebook.com/pages/Calidad-en-Ingenier%C3%ADa-El%C3%A9ctrica-FASOR/912598835473640?fref=ts" target="_blank"><img class="footer-ico-redsocial" src="img/footer/ico_fb.png"/></a>
                <a href="https://twitter.com/fasordf" target="_blank"><img class="footer-ico-redsocial" src="img/footer/ico_tw.png"/></a>
                <a href="mailto:contacto@fasor.com.mx?Subject=Hola buena tarde..." target="_top"><img class="footer-ico-redsocial" src="img/footer/ico_correo.png"/></a>
                <br/><br/>
                &copy; Calidad en Ingeniería Eléctrica Fasor 2015
            </div>
            
            
            <div class="col-xs-12 col-md-offset-2 col-md-5 ">
                <br/>
                <a href="<?php echo $url_root;?>aviso_privacidad.php">Aviso de Privacidad</a>
                <br/>
                Desarrollada y Diseñada por
                <a href="http://www.icticore.com" target="_blank"><img src="img/footer/ico_core.png"/></a>
            </div>
        </div>
    </div>
</div>
<script >
    $(window).load(function() {
        $('#loading').hide();
    });
    
    function ocultarElemento(id_elemento) {

        if ($(id_elemento).css('display') == 'block') {
            $(id_elemento).hide();
        } else {
            $(id_elemento).show();
        }

    }
    
    function ocultar_navbar(){
        $("#navbar").removeClass("in");
    }

    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
</script>