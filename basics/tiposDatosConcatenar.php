<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // TIPOS DE VARIABLES EN PHP
    //En PHP no es necesario declarar el tipo de variable, ya que PHP es un lenguaje de tipado dinámico. Esto significa que el tipo de una variable se determina automáticamente en tiempo de ejecución según el valor que se le asigne. Por ejemplo, si asignas un número entero a una variable, PHP la tratará como un entero; si luego le asignas una cadena de texto, PHP la tratará como una cadena.
    //Tipos de datos en PHP
    $dia = 42; // Tipo de dato entero
    $salario = 3.14; // Tipo de dato decimal (double o float)
    $nombre = "Ana"; // Tipo de dato cadena (string)
    $estado = true; // Tipo de dato booleano

    // Impresion de variables
    echo "<br>variable entero: $dia";
    echo "<br>variable double: $salario";
    echo "<br>variable string: $nombre";
    echo "<br>variable booleana: $estado"; //Se imprime 1 si es true y nada si es false
    echo "<hr>";

    echo "{$nombre} gana \$$salario"; //Contenacion de variables con interpolacion
    echo "<br>";
    $texto = sprintf("Hoy  es %d", $dia); //Concatenacion de variables con printf
    echo $texto;
    $peras = 3;
    $manznas = 5;
    $mangos = 4;
    $precioFrutas = 25500.30;                               
    $texto = sprintf("Tengo %d peras, %d manzanas y %d mangos y costaron $%.2f", $nombre, $peras, $manznas, $mangos, $precioFrutas);
    echo "<br>".$texto;

    //Uso heredoc para concatenar variables y texto
    echo "<hr>";
    $titulo = "Programa de Formacion ADSO";
    $texto = "Analisis y Desarrollo de Software";
    $html = <<<HTML
    <div class="card">
        <h2>Titulo</h2>
        <p>Texto</p>
    </div>
    HTML;
    echo $html;
    
    echo "<hr>";

    /*Generar un numero aleatorio entre 10 y 15 y mostrar el numero en texto */

    $numAleatorio = rand(10, 15);
    $numero = ["Diez", "Once", "Doce", "Trece", "Catorce", "Quince"];
    echo "<br><hr>Numero aleatorio: ".$numAleatorio;
    echo "<br><hr>Nombre del numero: ".$numero[$numAleatorio - 1];
    ?>
</body>
</html>