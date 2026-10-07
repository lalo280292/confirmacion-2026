<?php
// ===== CONFIGURACIÓN DEL EVENTO =====

// Clave para las páginas de administración (registro, confirmados, mesas, panel, recepción...).
// Vacía ('') = sin contraseña. Si algún día quieres protegerlas, escribe una clave aquí
// y se pedirá una sola vez por navegador.
define('ADMIN_CLAVE', '');

// URL de la invitación. El link de cada invitado será URL_INVITACION . '?id=XXXXX'
// Ejemplo: 'https://lalo.inv15.com/'  ->  https://lalo.inv15.com/?id=KZ83C
// Si se deja vacía se usa la carpeta donde está este archivo.
define('URL_INVITACION', '');

// Carpeta donde viven invitados.json, confirmados.json, firmas.json y accesos.json
// (protegida con .htaccess para que nadie pueda descargarlos directamente).
define('DATA_DIR', __DIR__ . '/data');

// Si una invitación no tiene cantidad capturada, el invitado puede confirmar hasta este número de personas.
define('MAX_PERSONAS_SIN_ASIGNAR', 10);

// Cantidad de códigos que se generan si invitados.json no existe.
define('CODIGOS_INICIALES', 400);

// Zona horaria para la fecha de las confirmaciones.
date_default_timezone_set('America/Mexico_City');
