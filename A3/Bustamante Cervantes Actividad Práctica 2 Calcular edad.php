<?php

//Definir los elementos
//Inicializar las variables
// Calcular la edad
//      Obteniendo la diferencia entre años
//          Si y acumplio años entonces ed la misma diferencia de años
//          Si no ah cumplido años. Entonces seria la diferencia de años menos 1;

$diaNacimiento = 10;
$mesNacimiento = 07;
$anhoNacimiento = 1998;

$diaComparacion = date("d")-1;
$mesComparacion =date("m");
$anhoComparacion = date("Y");



$anhosCumplidos = $anhoComparacion-$anhoNacimiento;

if($mesNacimiento >= $mesComparacion){
    if($diaNacimiento < $diaComparacion){
        $anhosCumplidos= $anhosCumplidos- 1;
    }
}
echo "Tienes: ".$anhosCumplidos."<br>";
?>
