<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies: deel 1</h1>

            <?php
                function berekenSom($getal1, $getal2) {
                    return $getal1 + $getal2;
                }

                function vermenigvuldig($getal1, $getal2) {
                    return $getal1 * $getal2;
                }

                $even = FALSE;
                function isEven($getal) {
                    if ($getal % 2 == 0) {
                        $even = TRUE;
                    }
                    else {
                        $even = FALSE;
                    }
                    return $even;
                }

                function lengte($woord) {
                    $lengteWoord = strlen($woord);
                    $woordUpper = strtoupper($woord);

                    $infoArray = array($lengteWoord, $woordUpper);
                    return $infoArray;
                }
            ?>
            <ul>
                <li><?php echo "De som van " . $getal1 . " en " . $getal2 . " is " . berekenSom(3,5) ?></li>

                <li><?php echo "De vermenigvuldiging van " . $getal1 . " en " . $getal2 . " is " . vermenigvuldig(3,5) ?></li>

                <li><?php echo "Het getal " . $getal . " is " . isEven(4) ?></li>

                <li><?php echo "Het woord " . lengte(kippen)[1] . " is " . lengte(kippen)[0] . " karakters" ?></li>
            </ul>

            <h1 class="extra">Opdracht functies: deel 2</h1>

            <?php
                function drukArrayAf($meubels) {
                    $meubels = array("stoel", "tafel", "kast", "zetel");
                    return $meubels;
                }

                function validateHtmlTag($html) {
                    $open = '<html>';
                    $close = '</html>';
            
                    $isValid = "De tag is niet valid :(";
            
                    if (strpos($html, $open) === 0) {
                        $closePos = strlen($html) - strlen($close);
            
                        if (stripos($html, $close) == $closePos) {
                            $isValid = "De tag is valid :)";
                        }
                    }
            
                    return $isValid;
                }
            
                $validHTML  =   validateHtmlTag("<div>Testje</div>");
            ?>

            <ul>
                <h1>Opdracht functies</h1>
                <li><?php echo "drukArrayAf[0] heeft een waarde '" . drukArrayAf($meubels)[0] . "'" ?></li>

                <li><?php echo $validHTML ?></li>

            </ul>

        </section>

    </body>
</html>
