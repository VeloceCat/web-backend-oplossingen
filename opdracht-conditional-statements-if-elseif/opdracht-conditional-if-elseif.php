<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else if: deel 1</h1>

            <?php 
                $getal = 56;
                $tientallen = "onbekend";

                if ($getal > 0 && $getal <= 10) {
                    $tientallen = "Het getal ligt tussen 0 en 10";
                }
                elseif ($getal > 10 && $getal <= 20) {
                    $tientallen = "Het getal ligt tussen 10 en 20";
                }
                elseif ($getal > 20 && $getal <= 30) {
                    $tientallen = "Het getal ligt tussen 20 en 30";
                }
                elseif ($getal > 30 && $getal <= 40) {
                    $tientallen = "Het getal ligt tussen 30 en 40";
                }
                elseif ($getal > 40 && $getal <= 50) {
                    $tientallen = "Het getal ligt tussen 40 en 50";
                }
                elseif ($getal > 50 && $getal <= 60) {
                    $tientallen = "Het getal ligt tussen 50 en 60";
                }
                elseif ($getal > 60 && $getal <= 70) {
                    $tientallen = "Het getal ligt tussen 60 en 70";
                }
                elseif ($getal > 70 && $getal <= 80) {
                    $tientallen = "Het getal ligt tussen 70 en 80";
                }
                elseif ($getal > 80 && $getal <= 90) {
                    $tientallen = "Het getal ligt tussen 80 en 90";
                }
                elseif ($getal > 90 && $getal <= 100) {
                    $tientallen = "Het getal ligt tussen 90 en 100";
                }
                else {
                    $tientallen = "** ERROR **";
                }

            ?>

            <ul>
                <li><?php echo $tientallen ?></li>
                <li><?php echo strrev($tientallen) ?></li>
            </ul>  
        
        </section>

    </body>
</html>
