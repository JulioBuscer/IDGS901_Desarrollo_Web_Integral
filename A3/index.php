<?php

//Definir los elementos
//Inicializar las variables
// Calcular la edad
//      Obteniendo la diferencia entre años
//          Si y acumplio años entonces ed la misma diferencia de años
//          Si no ah cumplido años. Entonces seria la diferencia de años menos 1;

$diaNacimiento = 30;
$mesNacimiento = 01;
$anhoNacimiento = 2020;

$diaComparacion = 28;       //date("d")-1;
$mesComparacion = 05;       //date("m");
$anhoComparacion = 2021;    //date("Y");



$anhosCumplidos = $anhoComparacion-$anhoNacimiento;

if($mesNacimiento >= $mesComparacion){
    if($diaNacimiento < $diaComparacion){
        $anhosCumplidos= $anhosCumplidos- 1;
    }
}
echo "Tienes: ".$anhosCumplidos."<br>";
?>