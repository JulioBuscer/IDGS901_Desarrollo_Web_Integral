<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    $metodoUtilizado = $_SERVER['REQUEST_METHOD'];
    /*
    if ($metodoUtilizado == 'GET') {
        echo "No es posible acceder mediante $metodoUtilizado <br>";
        exit();
    }
    */

    $numPeticiones = 0;

    if (isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];
        //$nombre = $_POST["nombre"];
        $numPeticiones = $_GET['numPeticiones'];
        $numPeticiones++;
        include('show.php');
        include('form.php');
    } else {
        // Con el Include podemmos jalar el codigo que este en el archivo incluido
        include('form.php');
        include_once('form.php');
    }




    ?>
</body>

</html>