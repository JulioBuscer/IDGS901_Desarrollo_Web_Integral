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
        $nombre="Julio Enrique Bustamante Cervantes";
        $explode = explode(" ", $nombre);
        $implode = implode("", $explode);
        $ciclos= strlen($implode);
        for ($i=0; $i <= $ciclos; $i++) { 
            echo substr($implode,0,$i)."<br>";
        }
    ?>
</body>

</html>