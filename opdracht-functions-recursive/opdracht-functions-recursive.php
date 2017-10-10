<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht recursive</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <style>
                img
                {
                    display:block;
                    padding:6px;
                    margin:24px auto;
                }
            </style>
        
            <h1>Opdracht recursive: deel 1</h1>

            <?php

                function berekenKapitaal($kapitaal, $renteProcent, $looptijd) {
                    static $teller		=	1;
                    static $historiek	=	array();

                    if ($teller <= $looptijd) {
                        $renteBedrag = floor( $kapitaal * ( $renteProcent / 100 ) );
                        $nieuwKapitaal = $kapitaal + $renteBedrag;
                        $historiek[$teller] = "Het nieuwe bedrag bedraagt " . $nieuwKapitaal . "€ (waarvan " . $renteBedrag . "€ onze rente is)";
                        $teller++;

                        return berekenKapitaal($nieuwKapitaal, $renteProcent, $looptijd);
                    }
                    else {
                        return $historiek;
                    }
                }

                $startKapitaal 	=	100000;
                $renteVoet		=	8;
                $aantalJaar		=	10;

                $winstHans = berekenKapitaal( $startKapitaal, $renteVoet, $aantalJaar );
            ?>

            <ul>
                <li>
                    <p>Een old school vraagstuk</p>
                    <?php foreach($winstHans as $value): ?>
				        <li><?php echo $value ?></li>
			        <?php endforeach ?>  
                </li>
            </ul>

            <h1>Opdracht recursive: deel 2</h1>

            <?php

                function berekenKapitaal2( $dataArray ) {
                    if ($dataArray['teller'] <= $dataArray['looptijd']) {
                        $renteBedrag = floor( $dataArray['kapitaal'] * ( $dataArray['renteProcent'] / 100 ) );
                        $dataArray['kapitaal'] += $renteBedrag;
                        $dataArray['historiek'][$dataArray['teller']] = "Het nieuwe bedrag bedraagt " . $dataArray['kapitaal'] . "€ (waarvan " . $renteBedrag . "€ onze rente is)";
                        $dataArray['teller']++;

                        return berekenKapitaal2( $dataArray );
                    }
                    else {
                        return $dataArray;
                    }
                }

                $startKapitaal 	=	100000;
                $renteVoet		=	8;
                $aantalJaar		=	10;

                $winstHans = berekenKapitaal2(array('kapitaal' => $startKapitaal, 'renteProcent' => $renteVoet, 'looptijd' => $aantalJaar, 'teller'	=> 1, 'historiek'	=>	array()));

            ?>

            <ul>
                <li>
                    <p>Een old school vraagstuk (zonder static)</p>
                    <?php foreach( $winstHans['historiek'] as $value): ?>
				        <li><?php echo $value ?></li>
			        <?php endforeach ?>
                </li>
            </ul>

        </section>

    </body>
</html>
