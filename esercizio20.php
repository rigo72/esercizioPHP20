<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">Indirizzo</th>
            <th style="border: 1px solid black">Metri quadri</th>
            <th style="border: 1px solid black">Prezzo al metro quadro</th>
            <th style="border: 1px solid black">Prezzo totale</th>
        </tr>
    <?php   
        $casa = array("indirizzo" => "Via Bellini 63" , "metriQuadri" => 63 , "prezzoAlMetroQuadro" => 6363);
        $prezzoDellaCasa = ($casa["metriQuadri"] * $casa["prezzoAlMetroQuadro"]);
        $casa["prezzoDellaCasa"] = $prezzoDellaCasa;
        foreach($casa as $value){
            echo "<td style='border: 1px solid black'> $value </td>";
        }
    ?>
    </table>
</body>
</html>