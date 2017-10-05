




<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1>Opdracht string extra functions: deel 1</h1>
            <?php 
                $fruit = "kokosnoot";

                $karakters = strlen($fruit);
                $positieO = strpos($fruit, "o")
            ?>

            <ul>
                <li><?php echo $fruit . " telt " . $karakters . " karakters." . "</br>"?></li>
                <li><?php echo "de eerste o van " . $fruit . " staat op plaats " . ($positieO + 1)  ?></li>
            </ul>


            <h1>Opdracht string extra functions: deel 2</h1>

            <?php 
                $fruit = "ananas";
                $fruitReverse = strrev ($fruit);

                $karakters = strlen($fruit);
                $positieA = $karakters - strpos($fruitReverse, "a");
                $uppercase = strtoupper($fruit);
            ?>
            <ul>
                <li><?php echo "de laatste a van " . $fruit . " staat op plaats " . $positieA  ?></li>
                <li><?php echo $uppercase ?></li>
            </ul>
      
    		<h1>Opdracht string extra functions: deel 3</h1>

            <?php 
                $lettertje = "e";
                $cijfertje = "3";
                $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
            ?>
    		<ul> 
                <li><?php echo str_replace($lettertje,$cijfertje,$langsteWoord); ?></li>
    		</ul>

        </section>

    </body>
</html>
