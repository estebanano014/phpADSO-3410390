<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php
    $dia = date("d");
    echo "Dia: ".$dia;
    $diaLetras = date("D");
    echo "<br>Dia en letras: ".$diaLetras; // Concatenacion con punto
    $diaSemana = date("N");
    echo "<br>Dia de la semana: $diaSemana"; //Concatenacion con doble comilla
    echo '<br>Dia de la semana: $diaSemana'; //No se concatena la variable
    //Mostrar Miercoles
    $diasVector = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    echo "<br><hr>Dia de la semana: ".$diasVector[$diaSemana-1];
    echo "<br>Dia de la semana: {$diasVector[$diaSemana-1]}"; //Interpolacion de variables
    /************************ */
    $mesesVector = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $mesNumero = date("n");
    echo "<br><hr>Mes: ".$mesesVector[$mesNumero-1];
    /************************ */
    if ($diaSemana <= 15 && $mesNumero <= 11) {
        echo "<br><hr>Ahorrando para Black Friday";
    } else {
        echo "<br><hr>Gastando el dinero en Black Friday";
    }
    /********************  */
    $numAleatorio = rand(1, 3000);
    echo "<br><hr>Numero aleatorio: ".$numAleatorio;
    if ($numAleatorio < 1000) {
        echo "<br>El numero es menor a 1000";
    } elseif ($numAleatorio <= 1500) {
        echo "<br>El numero esta entre 1000 y 1500";
    } elseif ($numAleatorio < 2000) {
        echo "<br>El numero es menor a 2000";
    } else {
        echo "<br>El numero es mayor a 2000";    
    }
    ?>
</body>
</html>