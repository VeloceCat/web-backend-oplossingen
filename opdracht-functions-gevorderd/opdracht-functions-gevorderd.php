<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies gevorderd</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies gevorderd: deel 1</h1>

            <?php
                $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
                $needle1 = '2';
                $needle2 = '8';
                $needle3 = 'a';
            
                function aantalKarakters1($needle) {
                    global $md5HashKey;
                    $haystack = $md5HashKey;
                    $haystackCount =  strlen($haystack);
                    $needleAantal = substr_count ($haystack, $needle);
                    $needleProcent = ($needleAantal / $haystackCount) * 100;
            
                    return $needleProcent;
                }
            
                function aantalKarakters2($needle) {
                    $haystack = $GLOBALS['md5HashKey'];
                    $haystackCount =  strlen($haystack);
                    $needleAantal = substr_count ($haystack, $needle);
                    $needleProcent = ($needleAantal / $haystackCount) * 100;
            
                    return $needleProcent;
                }

                function aantalKarakters3($haystack, $needle) {
                    $haystackCount =  strlen($haystack);
                    $needleAantal = substr_count ($haystack, $needle);
                    $needleProcent = ($needleAantal / $haystackCount) * 100;
            
                    return $needleProcent;
                }
            
                $methode1 =	aantalKarakters1($needle1);
                $methode2 = aantalKarakters2($needle2);
                $methode3 =	aantalKarakters3($md5HashKey, $needle3);
            ?>
            <ul>
                <li><?php echo "De needle '" . $needle1 . "' komt " . $methode1 . "% voor in de hash key '" . $md5HashKey . "'" ?></li>
                <li><?php echo "De needle '" . $needle2 . "' komt " . $methode2 . "% voor in de hash key '" . $md5HashKey . "'" ?></li>
                <li><?php echo "De needle '" . $needle3 . "' komt " . $methode3 . "% voor in de hash key '" . $md5HashKey . "'" ?></li>
            </ul>

            <h1 class="extra">Opdracht functies gevorderd: deel 2 (Angry Birds)</h1>

            <?php
                $pigHealth = 5;
                $maximumThrows = 8;

                function calculateHit() {
                    global $pigHealth;
                    $info = array();
                    $raakKans = rand(0,9);
                    $isRaak = ($raakKans <= 3 ) ? true : false;
            
                    if ($isRaak) {
                        $pigHealth--;
                        $info['isHit'] = true;
                        $info['string'] = "Raak! Er zijn nog maar " . $pigHealth . " varkens over."; 
                    }
                    else {
                        $info['isHit'] = false;
                        $info['string'] = "Mis! Nog " . $pigHealth . " varkens in het team.";
                    }
            
                    return $info;
                }

                function launchAngryBird()
                {
                    global $pigHealth;
                    global $maximumThrows;
                    global $spelen;
            
                    if ($maximumThrows != 0 && $pigHealth > 0) {
                        $hitResult = calculateHit();
                        $maximumThrows--;
                        $spelen[] = $hitResult['string'];
            
                        launchAngryBird();
                    }
                    else {
                        if ($pigHealth > 0) {
                           $spelen[] = "Verloren. :("; 
                        }
                        else {
                            $spelen[] = "Gewonnen! :)";
                        }
                    }
                } 
            
                launchAngryBird();
            ?>
            <ul>
               <li><?php var_dump($spelen); ?></li>
            </ul>
        </section>

    </body>
</html>
