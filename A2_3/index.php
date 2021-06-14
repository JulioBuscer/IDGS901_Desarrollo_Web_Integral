<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    function agenda()
    {
        $dias = [
            ["dia" => 10, "mes" => 07],
            ["dia" => 15, "mes" => 5],
            ["dia" => 15, "mes" => 7]
        ];
        $meses = [
            ["Enero", 1, 31],
            ["Febrero", 1, 28],
            ["Marzo", 1, 31],
            ["Abril", 1, 30],
            ["Mayo", 1, 31],
            ["Junio", 1, 30],
            ["Julio", 1, 31],
            ["Agosto", 1, 31],
            ["Septiembre", 1, 30],
            ["Octubre", 1, 31],
            ["Noviembre", 1, 30],
            ["Diciembre", 1, 31]
        ];
        echo "<div class='bg-dark'>";
        echo "<table class='table table-responsive table-dark'>";
        for ($i = 0; $i < 12; $i++) {
            echo "<tr>";
            $mes = $meses[$i][0];
            echo "<th> $mes </th>";
            for ($j = 0; $j < $meses[$i][2]; $j++) {
                foreach ($dias as $agenda) {
                    $agendado = false;
                    if ($agenda["mes"] == ($i + 1) & $agenda["dia"] == ($j + 1)) {
                        $agendado = true;
                        break;
                    }
                }
                if ($agendado) {
                    echo "<td class='bg-success'> " . ($j + 1) . " </td>";
                } else {
                    echo "<td class=''>" . ($j + 1) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    agenda();


    ?>
</body>

</html>