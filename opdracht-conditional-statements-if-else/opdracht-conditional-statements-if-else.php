<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else: deel 1</h1>

            <?php 
                $jaar = 2016;
                
                if ($jaar % 4 == 0) {
                    if ($jaar % 100 == 0) {
                        if ($jaar % 400 == 0) {
                            $schrikkeljaar = $jaar . " is een schrikkeljaar";
                        }
                        else {
                            $schrikkeljaar = $jaar . " is geen schrikkeljaar";
                        }
                    }   
                    else {
                        $schrikkeljaar = $jaar . " is een schrikkeljaar";
                    }
                }
                else {
                    $schrikkeljaar = $jaar . " is geen schrikkeljaar";
                }
            ?>
            <ul>
                <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                    <ul>
                        <li><?php echo $schrikkeljaar ?></li>
                    </ul>
                </li>
            </ul>  

    		<h1 class="extra">Opdracht if else: deel 2</h1>

    		<ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521). Hoeft niet met if-statement.</li>

                <li>
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <?php 
                            $seconden = 221108521;

                            $minuten = $seconden / 60;
                            $uren = $minuten / 60;
                            $dagen = $uren / 24;
                            $weken = $dagen / 7;
                            $maanden = $dagen / 31;
                            $jaren = $dagen / 365;
                        ?>
                        <p>in 221108521 seconden</p>
                        <ul>
                            <li><?php echo "minuten: " . round($minuten, 0) ?></li>
                            <li><?php echo "uren: " . round($uren, 0) ?></li>
                            <li><?php echo "dagen: " . round($dagen, 0) ?></li>
                            <li><?php echo "weken: " . round($weken, 0) ?></li>
                            <li><?php echo "maanden (31): " . round($maanden, 0) ?></li>
                            <li><?php echo "jaren (365): " . round($jaren, 0) ?></li>
                        </ul>
                    </div>

                </li>
    		</ul>

        </section>

    </body>
</html>
