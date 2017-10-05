<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht conditional statements: deel 1</h1>
            <?php
	
                $getal 	= 	1; 
                $dag 	=	'onbekend';
                    
                ( $getal == 1 ) ? $dag = 'maandag' : $dag; 
                
                ( $getal == 2 ) ? $dag = 'dinsdag' : $dag;
                
                ( $getal == 3 ) ? $dag = 'woensdag' : $dag;
                
                ( $getal == 4 ) ? $dag = 'donderdag' : $dag;
                
                ( $getal == 5 ) ? $dag = 'vrijdag' : $dag;
                
                ( $getal == 6 ) ? $dag = 'zaterdag' : $dag;
                
                ( $getal == 7 ) ? $dag = 'zondag' : $dag;
                
            ?>
            <ul>
                <li><?php echo "dag " . $getal . " is " . $dag ?></li>
            </ul>  

    		<h1 class="extra">Opdracht conditional statements: deel 2</h1>
            
            <?php
            $dagUpper = strtoupper($dag);

            $dagAklein = str_replace("A", "a", $dagUpper);
            
            $dagKarakters = strlen($dagUpper);
            $dagReverse = strrev($dagUpper);
            $dagPositieA = $karakters - strpos($dagReverse, "A");
            $dagLaatsteAklein = substr_replace($dagUpper, "a", ($dagPositieA - 1), 1);
            ?>
    		<ul>
                <li><?php echo $dagUpper ?></li>
    			<li><?php echo $dagAklein ?></li>
                <li><?php echo $dagLaatsteAklein ?></li>
    		</ul>

        </section>

    </body>
</html>
