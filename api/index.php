<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promedio de las calificaciones</title>
</head>
<body>
    <h1>ejemplo 1</h1>
    <hr>
    <h3>
        Un estudiante realizara cuatro examenes durante el semestre, los cuales tienen la misma ponderacion
        realizar el programa en php para obtener el promedio de las calificaciones obtenidas
    </h3>
    <hr>
<?php

// Definir las calificaciones de los cuatro examenes
$examen1 = 85;
$examen2 = 75;
$examen3 = 90;
$examen4 = 88;

// Calcular el promedio
$promedio = ($examen1 + $examen2 + $examen3 + $examen4) / 4;

// Imprimir el resultado
echo "El promedio de los cuatro examenes es: " . $promedio;

 ?>
</body>
</html>