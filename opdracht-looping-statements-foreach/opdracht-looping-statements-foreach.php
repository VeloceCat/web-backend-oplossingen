<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht foreach: deel 1</h1>

            <?php
                $text = file_get_contents('text-file.txt');
                $lengte = strlen($text);
                $textArray = array();

                for ($i = 0; $i < $lengte; $i++ )
                {
                    $textArray[] = substr( $text, $i, 1 );
                }
                $textArray = str_split($text);

                rsort($textArray);
                $reversedSortedTextArray = array_reverse($textArray);

                $iArray = array();
                
                foreach($characterSortedReversed as $value) {
                    if (isset($iArray[$value])) {
                        $iArray[$value]++;
                    }
                    else {
                        $iArray[$value] = 1;
                    }  
                }
            ?>

            <ul>
                <h2>Z tot A</h2>
                <li><?php var_dump(textArray) ?></li>

                <h2>Reversed</h2>
                <li><?php var_dump(reversedSortedTextArray); ?></li>

                <h2>Aantal karakters</h2>
                <li><?php var_dump(iArray) ?></li>
            </ul>

            <h1 class="extra">Opdracht foreach: deel 2</h1>

            <?php
            //Deel 2 werkt niet :(
                $text = file_get_contents('text-file.txt');
                $alphas = range('A', 'Z');
                
                $textUpper = strtoupper($text);
                $aantalAlphas = strlen($alphas);

                $aantalChars = array();
                $counter = 0;
                for ($i = 0; $i <= $aantalAlphas; $i++) {
                    foreach ($alphas as $letter) {
                        foreach ($textUpper as $char) {
                            if ($letter == $char) {
                                $counter++;
                            }
                            $aantalChars += $letter . " x " . $counter . '</br>';
                        }
                    }
                }

            ?>

            <ul>
                <li><?php echo $textUpper ?></li> 

                <li><?php var_dump($alphas) ?></li>

                <li><?php print_r($aantalChars) ?></li>
            </ul> 

        </section>
      

    </body>
</html>
