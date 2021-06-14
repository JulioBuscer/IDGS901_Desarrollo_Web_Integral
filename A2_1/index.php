<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    //Declaracion de Funciones
    function imprimir()
    {
        echo " Imprimiendo desde la funcion <br>";
    }
    imprimir();
    

    
    //Declaracion de Funciones, pasando parámetros
    function titulo($descripcion, $saludo)
    {
        echo "$descripcion $saludo<br>";
    }
    titulo("Mensaje desde parámetro", "Buenas noches");
    $titulo = "Mensaje desde parámetro";
    $saludo = "Buen día";
    titulo($titulo,$saludo);
    

    
    //Declaracion de una función con parámetros opcionales
    function tituloOpcional($descripcion = "Sin título")
    {
        echo "$descripcion <br>";
    }
    $titulo = "Mi título";
    tituloOpcional();
    tituloOpcional($titulo);
    

    
    //Paso por referencia
    function sumar(&$resultado){
        $resultado++;
        echo"Valor dentro de la funcion $resultado <br>";
    }
    
    // 000001= $resultado = 0
    $resultado = 0;
    sumar($resultado);
    echo"Valor fuera de la funcion $resultado <br>";
    

    
    function imprimirYguardar($titulo){
    echo "$titulo<br>";
    return "El mensaje es $titulo <br>";
    }

    $texto = imprimirYguardar("Hola");
    echo $texto;
    

    
    //Declaracion de arreglos
    $arreglo = array(1,2,"Hola", 3.1416);
    echo var_dump($arreglo)."<br>";
    
    $arreglo = [1,2,"Hola", 3.1416];
    echo var_dump($arreglo)."<br>";

    // Declaracion de arreglos
    $arreglo[0]= true;
    echo var_dump($arreglo)."<br>";
    echo $arreglo[2]."<br>"; 
    

    //Iteraciones

    $arreglo = array(1, 2, "Hola", 3.1416);
    $ciclos = count($arreglo);

    
    //FOR
    for ($i=0; $i < $ciclos; $i++) { 
        echo"$arreglo[$i] <br>";
    }
    
    
    //WHILE
    while ($ciclos >= 0) {
        echo"$arreglo[$ciclos] <br>";
        $ciclos--;
    }
    

    
    //DO WHILE
    do {
        echo "$arreglo[$ciclos] <br>";
        $ciclos--;
    } while ($ciclos >= 0);
    

    
    //FOREACH
    foreach($arreglo as $item){
        echo "$item <br>";
    } 
    

    
    //FOREACH
    $arreglo = array(1, 2, [1.1,1.2,1.3], 3.1416);
    foreach($arreglo as $item){
        if(is_array($item)){
            foreach($item as $subItem){
                echo "Item secudario $subItem <br>";
            }
        }else{
            echo "Item primario $item <br>";
        }
        
    } 
    

    
    //Iteraciones
    //Arreglos asociativos
    $arreglo = ["id" => 1, "nombre" => "Julio", "edad" => 22];
    //echo var_dump($arreglo) . "<br>";
    //echo $arreglo['id'] . ", Soy " . $arreglo['nombre'] . ", y tengo" . $arreglo['edad'] . "<br>";

    foreach($arreglo as $key => $valor){
        echo"El campo $key tiene un valor $valor <br>";
    }
    

    
    // Uso de clases
    class Persona
    {
        public $nombre;

        static $edad = 18;
        CONST  EDAD=18;

        function __construct()
        {
            $this->nombre = "no asignado";
        }

        public function setNombre($pNombre)
        {
            $this->nombre = $pNombre;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        //Funcion estatica
        public static function edadMin($pEdad)
        {
            return 18 + $pEdad;
        }
    }

    $persona = new Persona();
    //echo var_dump($persona);
    //$persona->nombre = "Julio";     // <- Asignación
    //echo $persona->nombre . "<br>";   // <- Obtener el valor

    // Arreglo asociativo
    //$arreglo = ["nombre" => ""];
    //$arreglo["nombre"] = "Enrique"; // <- Asignación
    //echo $arreglo["nombre"] . "<br>"; // <- Obtener el valor

    $persona->setnombre("Julio");       // <- Asignación
    //echo $persona->getNombre() . "<br>";  // <- Obtener el valor

    //$edadMinima = Persona::edadMin(2);
    //echo "$edadMinima <br>"

    //$edadMinima = Persona::$edad;
    //echo "$edadMinima <br>"

    $edadMinima = Persona::EDAD;
    echo "$edadMinima <br>";
    
    
    // Funciones de uso común en arreglos
    // Convertir una cadena en un arreglo
    $cadena = "Hola buen día";
    $arreglo = explode(" ", $cadena);
    echo var_dump($arreglo);

    $cadena2 = implode(" ", $arreglo);
    echo var_dump($cadena2);
    
    
    // Recortar una cadena
    $cadena = "hola buen día";
    $recotada = substr($cadena,10,3);
    echo var_dump($recotada);
    
    
    // Reemplazar una cadena
    $cadena = "hola buen día";
    $reemplazada = str_replace("buen día","buenas noches", $cadena);
    echo var_dump($reemplazada);
    
    //Conocer la longuitud de una cadena
    $longitud = strlen("hola buen día");
    echo "La cadena tiene una longitud de $longitud <br>"

    ?>
</body>

</html>