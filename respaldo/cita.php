cita:"<?php
$mensajes = array(
	'Donaciones http://paypal.me/adryanlist',
	'Tu Donacion Permite seguir mejorando Adryanlist - Donacion http://paypal.me/adryanlist', 
	'Apoya este proyecto, Realiza una donacion - Donacion http://paypal.me/adryanlist',
	'Necesitas Ayuda ingresa al Foro - http://adryanlist.org/foro',
	'Unete al Grupo de Telegram - telegram.me/adryanlist',
	'Sigueme en Facebook - Adryanlist',
	'Este proyecto es Gratis pero continua  gracias a tus Donaciones',
	'sigueme en Twitter - @Adryan',
	'AdryanList solo es para Kodi, no existe lista para smarttv o roku',
	'Este proyecto es por diversion no tiene ningun fin de lucro',
	'Proximamente Adryanlist se transformara en ExabyteTV 4.0',
	'Proximamente Adryanlist se convertira en TecnoTV Addon 100% Autorizado !! y Verificado',
	'Todo este contenido es GRATIS, si pagaste, te han visto la cara',
	'Tu donacion me motiva a seguir esforzandome dia a dia'
);
 
shuffle($mensajes);
 
$i = 1;
 
foreach ($mensajes as $mensaje) {
	if($i < 2)
	echo $mensaje;
	$i++;
} ?>";