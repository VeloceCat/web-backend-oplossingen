<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <?php
                $dieren = array("koe", "schaap", "paard", "lama", "kip", "konijn");
                $aantalDieren = count($dieren);

                $teZoekenDier = "lam";

                if (in_array($teZoekenDier, $dieren)) {
                    $boodschap = "gevonden! :)";
                }
                else {
                    $boodschap = "niet gevonden! :(";
                }
            ?>

            <ul>
                <li><?php print_r($dieren) ?></li>

                <li><?php echo "Aantal dieren: " . $aantalDieren ?></li>

                <li><?php echo $boodschap ?></li>

            </ul> 

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <?php
                $dieren = array("koe", "schaap", "paard", "lama", "kip", "konijn");
                $zoogdieren = array("olifant", "giraf");

                $dierenlijst = array_merge($dieren, $zoogdieren);
            ?>

            <ul>
                <li>
                    <?php 
                        sort($dieren);
                        foreach ($dieren as $key => $dier) {
                            echo $dier . " => ";
                        }
                    ?>
                </li>

                <li><?php print_r($dierenlijst) ?></li>
            </ul>


            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <?php
                $waarden = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
                $duplicates = array_unique($waarden);
            ?>

            <ul>
                <li><?php print_r($waarden) ?></li>

                <li><?php print_r($duplicates) ?></li>

                <li><?php 
                        rsort($duplicates);
                        foreach ($duplicates as $key => $duplicate) {
                            echo $duplicate . " => ";
                        }
                    ?></li>

            </ul>

        </section>

    </body>
</html>
