<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

            <?php
                $dierenManier1 = array("koe", "schaap", "varken", "paard", "kip", "lama", "ijsbeer", "konijn", "vleermuis", "hond");

                $dierenManier2[] = "koe";
                $dierenManier2[] = "schaap";
                $dierenManier2[] = "varken";
                $dierenManier2[] = "paard";
                $dierenManier2[] = "kip";
                $dierenManier2[] = "lama";
                $dierenManier2[] = "ijsbeer";
                $dierenManier2[] = "konijn";
                $dierenManier2[] = "vleermuis";
                $dierenManier2[] = "hond";

                $voertuigen["landvoertuigen"] = array("vespa", "fiets");
                $voertuigen["watervoertuigen"] = array("surfplank", "vlot", "schoener", "driemaster");
                $voertuigen["luchtvoertuigen"] = array("luchtballon", "helicopter", "B25");
                
            ?>

            <ul>

                <li><?php echo "Manier 1: " . $dierenManier1[3] ?></li>
                <li><?php echo "Manier 2: " . $dierenManier1[7] ?></li>
                <li><?php var_dump($voertuigen) ?></li>

            </ul> 

            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <?php 
                $getallen = array(1, 2, 3, 4, 5);
                //$vermenigvuldig = $getallen[0] * $getallen[1] * $getallen[2] * $getallen[3] * $getallen[4];
                $vermenigvuldig = array_product($getallen);
                
                $getallenReverse = array_reverse($getallen);
            ?>

            <ul>
                <li><?php print_r($getallen) ?></li>

                <li><?php echo "Vermenigvuldiging van alle array-elementen is: " . $vermenigvuldig ?></li>

                <li>
                    <?php
                        foreach ($getallen as $getal) {
                            if ($getal % 2 != 0) {
                                echo $getal . "<br/>";
                            }
                        }
                    ?>
                </li>

                <li><?php print_r($getallenReverse) ?></li>

                <li>
                    <?php
                        $som =  array();

                        foreach( $getallen as $key => $getal ) {
                           $index1  =  $getal;
                           $index2  =  $getallenReverse[$key];
                     
                           $som[] =  $index1 + $index2;
                        }
                        echo "Som van de indexen is: " . array_sum($som);
                    ?>
                </li>
            </ul>
        
        </section>

    </body>
</html>
