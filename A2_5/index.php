<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    /**
     * Pasos
     * Declaracion de Objetos 
     * Declaracion de Variables
     * Declaracion de Funciones
     * Obtener los valores y el tipo de opercaion por metodo POST o GET La verdad la esa infomacion no es muy importante asegurarla
     * Ejecutar la operacion correspondiente con las variables
     * Mostrar el resultado
     */


    //Declaracion de Objetos y Variables
    class Operacion
    {
        //Declaracion de Variables
        public $parametro1;
        public $parametro2;
        public $resultado;

        //Declaracion de Funciones
        function __construct()
        {
            $this->parametro1 = 0;
            $this->parametro2 = 0;
            $this->resultado = 0;
        }

        public function sumar($parametro1, $parametro2)
        {
            $resultado = $parametro1 + $parametro2;
            return $resultado;
        }
        public function restar($parametro1, $parametro2)
        {
            $resultado = $parametro1 - $parametro2;
            return $resultado;
        }
        public function multiplicar($parametro1, $parametro2)
        {
            $resultado = $parametro1 * $parametro2;
            return $resultado;
        }
        public function dividir($parametro1, $parametro2)
        {
            $resultado = $parametro1 / $parametro2;
            return $resultado;
        }
    }
    $operacion = new Operacion();
    $operacion->parametro1 = 0;
    $operacion->parametro2 = 0;
    $operacion->resultado = 0;
    if (isset($_POST['sum'])) {
        $operacion->parametro1 = $_POST['n1'];
        $operacion->parametro2 = $_POST['n2'];
        $operacion->resultado = $operacion->sumar($operacion->parametro1, $operacion->parametro2);
    } else if (isset($_POST['res'])) {

        $operacion->parametro1 = $_POST['n1'];
        $operacion->parametro2 = $_POST['n2'];
        $operacion->resultado = $operacion->restar($operacion->parametro1, $operacion->parametro2);
    } else if (isset($_POST['mul'])) {

        $operacion->parametro1 = $_POST['n1'];
        $operacion->parametro2 = $_POST['n2'];
        $operacion->resultado = $operacion->multiplicar($operacion->parametro1, $operacion->parametro2);
    } else if (isset($_POST['div'])) {

        $operacion->parametro1 = $_POST['n1'];
        $operacion->parametro2 = $_POST['n2'];
        $operacion->resultado = $operacion->dividir($operacion->parametro1, $operacion->parametro2);
    }

    ?>
    <form method="POST">
        <div class="col-2 form-control align-self-center">
            <div class="col-md-12">Calculadora Basica</div>
            <div class="col-md-6 row">
                <div class="col-md-4">
                    <label for="n1">input 1</label>
                    <input type="number" name="n1" value="<?= $operacion->parametro1 ?>">
                </div>
                <div class="col-md-4">
                    <label for="n2">input 2</label>
                    <input type="number" name="n2" value="<?= $operacion->parametro2 ?>">
                </div>
                <div class="col-md-4">
                    <label for="resultado">Resultado</label>
                    <input type="number" name="resultado" value="<?= $operacion->resultado ?>">
                </div>
                <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-dark" name="sum">➕</button>
                    <button type="submit" class="btn btn-dark" name="res">➖</button>
                    <button type="submit" class="btn btn-dark" name="mul">✖</button>
                    <button type="submit" class="btn btn-dark" name="div">➗</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>