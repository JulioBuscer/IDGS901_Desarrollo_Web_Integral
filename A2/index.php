<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h3> Variables</h3>
    <?php
    $variable = 1;
    echo $variable;
    echo "<br>";
    $variable = "Hola";
    echo $variable;
    echo "<br>";
    $variable = true;
    echo $variable;
    echo "<br>";
    $variable = date("y-m-d");
    echo $variable;
    echo "<br>";
    $variable = 3.1416;
    echo $variable;
    echo "<br>";
    // $variable = null;
    // echo $variable2;
    // echo "<br>";
    ?>

    <h3>Operaciones y concatenacion</h3>

    <?php
    $variable1 = 2;
    $variable2 = 3;
    $variable3 = $variable1 + $variable2;
    echo $variable3;
    echo "<br>";

    $variable3 = $variable1 - $variable2;
    echo " $variable3 <br>";

    echo " $variable1*$variable2 <br>";

    echo " Concatenando " . "palabras <br>";

    echo "La multiplicacion de $variable1*$variable2 = " . ($variable1 * $variable2) . " <br>";

    echo (1 + "1.3"), "<br>";
    ?>

    <h3>Verificacion de variables</h3>
    <?php

    $variable4 = "";
    if (isset($variable4)) {
        echo "Si esta declarado y tiene valor <br>";
    } else {
        echo "No esta declarado y no tiene valor <br>";
    }

    echo var_dump($variable4) . "<br>";

    echo (1 + intval("1 ")) . "<br>";
    echo var_dump(1 + intval("1 ")) . "<br>";
    echo var_dump(boolval("1 ")) . "<br>";
    echo var_dump(floatval("1 ")) . "<br>";
    echo var_dump(strval("1 ")) . "<br>";
    ?>

    <h3>Comparadores</h3>
    <?php
    $variable = 1;
    if ($variable) {
        echo "Es veradadero <br>";
    } else {
        echo "Es falso <br>";
    }

    switch ($variable) {
        case 1:
            echo "Es numerico <br>";
            break;
        case '1':
            echo "Es una cadena <br>";
            break;
        case 1.0:
            echo "Es un decimal <br>";
            break;
        case true:
            echo "Es veradadero <br>";
            break;
    }

    if (is_numeric(1)) {
        echo "Es numerico <br>";
    }else{
        echo "No es numerico <br>";
    }    
    if (is_numeric('1')) {
        echo "Es numerico <br>";
    }else{
        echo "No es numerico <br>";
    }    
    if (is_numeric(1.0)) {
        echo "Es numerico <br>";
    }else{
        echo "No es numerico <br>";
    }
    if (is_numeric(true)) {
        echo "Es numerico <br>";
    }else{
        echo "No es numerico <br>";
    }
    ?>


</body>

</html>