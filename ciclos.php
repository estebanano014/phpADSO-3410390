<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php
    //CICLOS EN PHP
    $limite = 50;
    for ($i = 0; $i < $limite; $i++) {
        # Impresion de los numeros del 0 al 50
        echo "Numero: $i <br>";
    }

    //Ciclo while
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<hr>";
    # Impresion de los numeros del 1 al limite aleatorio (50 a 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Numero: ".$inicio."<br>";
        $inicio++;
    }

    //Do while
    $dia = date("d");
    $inicio = 1;
    # Mostrar los numero random (entre 10 y 20) al dia actual
    do {
        echo "[DO..WHILE] Numero: ".$inicio."<br>";
        $inicio++;
    } while ($inicio <= $dia);

    #Mostrar la tabla de multiplicar del 2.
    #Utilizar FOR, WHILE y DO..WHILE
    echo "<hr>";
    echo "<h3>Tabla de multiplicar del 2 (FOR)</h3>";

    $limite = 10;
    for ($i=1; $i <= $limite; $i++) { 
        echo "[FOR] Numero:" .(2*$i)."<br>";
    }

    echo "<h3>Tabla de multiplicar del 2 (WHILE)</h3>";

    $limite = 10;
    $inicio = 1;
    while ($inicio <= $limite) {
        echo "[WHILE] Numero:" .(2*$inicio)."<br>";
        $inicio++;
    }

    echo "<h3>Tabla de multiplicar del 2 (DO..WHILE)</h3>";

    $limite = 10;
    $inicio = 1;
    # Mostrar los numero random (entre 10 y 20) al dia actual
    do {
        echo "[DO..WHILE] Numero: ".(2*$inicio)."<br>";
        $inicio++;
    } while ($inicio <= $limite);
    ?>
    
</body>
</html>