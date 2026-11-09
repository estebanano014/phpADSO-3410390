<?php
	//Imprimir en php -> echo
	echo "Fecha y hora Actual: "."<br>";
	echo date('y-m-d H:i:s');
	echo "<br>";
	
	// 1. Configurar la zona horaria de tu país
	date_default_timezone_set('America/Bogota');

	// 2. Crear el objeto con la fecha y hora actual
	$fecha = new DateTime();

	// 3. Diccionarios de traducción en español
	$dias = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
	$meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

	// 4. Extraer las partes necesarias de la fecha
	$nombreDia = $dias[$fecha->format('w')]; // 'w' devuelve del 0 (domingo) al 6 (sábado)
	$numeroDia = $fecha->format('j');        // 'j' devuelve el día del mes sin ceros iniciales
	$nombreMes = $meses[$fecha->format('n') - 1]; // 'n' devuelve del 1 al 12
	$anio      = $fecha->format('Y');

	// 5. Formatear la hora en formato 12 horas con am/pm en minúsculas y con puntos (p.m.)
	$horaStr   = $fecha->format('g:i');       // 'g' hora de 1 a 12, 'i' minutos con ceros
	$periodo   = $fecha->format('a');         // 'a' devuelve 'am' o 'pm'
	$periodoFormateado = ($periodo === 'am') ? 'a.m.' : 'p.m.';

	// 6. Imprimir el resultado final estructurado
	echo "Hoy es {$nombreDia} {$numeroDia} de {$nombreMes} de {$anio} y son las {$horaStr} {$periodoFormateado}.";
