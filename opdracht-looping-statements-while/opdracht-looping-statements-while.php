<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        

        <ul>

            <li>
                <?php
                    $getal = 0;
                    while ($getal <= 100) {
                        echo $getal . ", ";
                        $getal++;
                    }
                ?>
            </li>

            <li>
                <?php
                    $getal1 = 0;
                    while ($getal1 <= 100) {
                        if ($getal1 > 40 && $getal1 < 80 && $getal1 % 3 == 0) {
                            echo $getal1 . ", ";
                        } 
                        $getal1++;
                    }
                ?>
            </li>

        </ul>

        <h1>Opdracht while: deel 2</h1>

        <?php
            $counter = 0;
            $boodschappenlijstje = array("appels", "vlees", "ice-tea", "yoghurt", "aardbijen");

            echo '<ul>';
            while(isset($boodschappenlijstje [$counter])) {
                echo "<li>" . $boodschappenlijstje[$counter] . "</li>";
                $counter++;
            }
            echo '<ul>'
        ?>

    </body>
</html>
