
<?php

    //Definir los elementos
    //Inicializar las variables
    // Calcular la edad
    //      Obteniendo la diferencia entre años
    //          Si y acumplio años entonces ed la misma diferencia de años
    //          Si no ah cumplido años. Entonces seria la diferencia de años menos 1;

    $diaNacimiento = 30;
    $mesNacimiento = 1;
    $anhoNacimiento = 2020;

    $diaComparacion = 28;
    $mesComparacion = 05;
    $anhoComparacion = 2021;

    $edad = $anhoComparacion - $anhoNacimiento;
    $yaCumplioAnhos = false;

    // Al comparar el mes
    // El mes ya paso. ya cumplio años
    if ($mesNacimiento < $mesComparacion) {
        $yaCumplioAnhos = true;
    }

    // El mismo mes de nacimiento . ¿Como saber si ya cumplio años? Comprando el día
    if ($mesNacimiento == $mesComparacion) {

        // El día de nacimiento es igual o menor que la comparacion. Ya cumplio
        if ($diaNacimiento <= $diaComparacion) {
            $yaCumplioAnhos = true;
        }
    }

    //El mes aun no ha llegado (menor al de la comparacion)
    if (!$yaCumplioAnhos) {
        $edad--;
    }

    //Impresion del mensaje
    echo "Tiene $edad años";
?>